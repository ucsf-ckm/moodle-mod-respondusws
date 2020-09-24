<?php
// Respondus 4.0 Web Service Extension For Moodle
// Copyright (c) 2009-2020 Respondus, Inc.  All Rights Reserved.
// Date: February 14, 2020.
namespace mod_respondusws\privacy;
defined('MOODLE_INTERNAL') || die();

use core_privacy\local\metadata\collection;

class provider implements
    \core_privacy\local\metadata\provider,
    \core_privacy\local\request\data_provider {

    public static function get_reason() : string {
        return 'privacy:metadata';
    }

    /**
     * @inheritDoc
     */
    public static function get_metadata(collection $collection): collection
    {
        $tables = [
            'respondusws_auth_users' => [
                'userid'
            ],
        ];

        foreach ($tables as $table => $fields) {
            $fielddata = [];
            foreach ($fields as $field) {
                $fielddata[$field] = 'privacy:metadata:' . $table . ':' . $field;
            }
            $collection->add_database_table(
                $table,
                $fielddata,
                'privacy:metadata:' . $table
            );
        }

        return $collection;
    }
}