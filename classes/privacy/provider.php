<?php
// Respondus 4.0 Web Service Extension For Moodle
// Copyright (c) 2009-2020 Respondus, Inc.  All Rights Reserved.
// Date: February 14, 2020.
namespace mod_respondusws\privacy;
defined('MOODLE_INTERNAL') || die();
class provider implements \core_privacy\local\metadata\null_provider {
    public static function get_reason() : string {
        return 'privacy:metadata';
    }
}
