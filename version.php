<?php
// Respondus 4.0 Web Service Extension For Moodle
// Copyright (c) 2009-2015 Respondus, Inc.  All Rights Reserved.
// Date: June 16, 2015.
defined("MOODLE_INTERNAL") || die();
if (isset($CFG) && $CFG->version >= 2014051200) {
    if (!isset($plugin))
        $plugin = new stdClass();
    $plugin->version = 2015061600;
    $plugin->respondusws_release = "2.9.0.00";
    $plugin->requires = 2010122500;
    $plugin->cron = 0;
    $plugin->component = 'mod_respondusws';
    $respondusws_info = $plugin;
} else {
    if (!isset($module))
        $module = new stdClass();
    $module->version = 2015061600;
    $module->respondusws_release = "2.9.0.00";
    $module->requires = 2010122500;
    $module->cron = 0;
    $respondusws_info = $module;
}
