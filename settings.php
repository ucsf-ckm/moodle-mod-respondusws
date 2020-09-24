<?php
// Respondus 4.0 Web Service Extension For Moodle
// Copyright (c) 2009-2020 Respondus, Inc.  All Rights Reserved.
// Date: February 14, 2020.
defined("MOODLE_INTERNAL") || die();

if ($ADMIN->fulltree) {
    $settings->add(
      new admin_setting_heading(
        "respondusws/moduledescheader",
          new lang_string('moduledescheader', 'respondusws'),
          new lang_string('moduledescription', 'respondusws')
      )
    );
    $settings->add(
      new admin_setting_heading(
        "respondusws/authenticationsettingsheader",
          new lang_string('authenticationsettingsheader', 'respondusws'),
          new lang_string('authenticationsettingsheaderinfo', 'respondusws')
      )
    );
    $settings->add(
      new admin_setting_configtext(
        "respondusws/username",
          new lang_string('username', 'respondusws'),
          new lang_string('usernameinfo', 'respondusws'),
        "",
        PARAM_TEXT
      )
    );
    $settings->add(
      new admin_setting_configpasswordunmask(
        "respondusws/password",
          new lang_string('password', 'respondusws'),
          new lang_string('passwordinfo', 'respondusws'),
        ""
      )
    );
    $settings->add(
      new admin_setting_configpasswordunmask(
        "respondusws/secret",
          new lang_string('secret', 'respondusws'),
          new lang_string('secretinfo', 'respondusws'),
        ""
      )
    );
}
