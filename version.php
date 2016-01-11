<?php
// Respondus 4.0 Web Service Extension For Moodle
// Copyright (c) 2009-2015 Respondus, Inc.  All Rights Reserved.
// Date: December 21, 2015.
defined("MOODLE_INTERNAL") || die();
if (!isset($CFG)) {
    global $CFG;
}
if (isset($CFG) && $CFG->version >= 2014051200) {
    if (!isset($plugin))
        $plugin = new stdClass();
    $plugin->version = 2015122100;
    $plugin->respondusws_release = "3.0.0.00";
    $plugin->requires = 2010122500;
    $plugin->cron = 0;
    $plugin->component = 'mod_respondusws';
    $respondusws_info = $plugin;
} else {
    if (!isset($module))
        $module = new stdClass();
    $respondusws_alias = &$module;
    $respondusws_alias->version = 2015122100;
    $respondusws_alias->respondusws_release = "3.0.0.00";
    $respondusws_alias->requires = 2010122500;
    $respondusws_alias->cron = 0;
    $respondusws_info = $module;
}
