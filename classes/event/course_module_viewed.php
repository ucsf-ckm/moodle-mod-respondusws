<?php
// Respondus 4.0 Web Service Extension For Moodle
// Copyright (c) 2009-2017 Respondus, Inc.  All Rights Reserved.
// Date: May 01, 2017.
namespace mod_respondusws\event;
defined('MOODLE_INTERNAL') || die();
class course_module_viewed extends \core\event\course_module_viewed {
    protected function init() {
        $this->data['crud'] = 'r';
        $this->data['edulevel'] = self::LEVEL_PARTICIPATING;
        $this->data['objecttable'] = 'respondusws';
    }
}
