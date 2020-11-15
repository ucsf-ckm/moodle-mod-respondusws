<?php
// Respondus 4.0 Web Service Extension For Moodle
// Copyright (c) 2009-2020 Respondus, Inc.  All Rights Reserved.
// Date: February 14, 2020.
defined("MOODLE_INTERNAL") || die();

$plugin->version = 2020021400;
$plugin->requires = 2013051409; // Moodle 2.5
$plugin->cron = 0;
$plugin->component = 'mod_respondusws';

$respondusws_info = $plugin;
$respondusws_info->release = "3.0.0.05";
