<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Settings that allow turning on and off various table features
 *
 * @package     atto_tablemsdlt
 * @copyright   2015 Joseph Inhofer <jinhofer@umn.edu>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$ADMIN->add('editoratto', new admin_category('atto_tablemsdlt', new lang_string('pluginname', 'atto_tablemsdlt')));

$settings = new admin_settingpage('atto_tablemsdlt_settings', new lang_string('settings', 'atto_tablemsdlt'));
if ($ADMIN->fulltree) {
    $name = new lang_string('allowborder', 'atto_tablemsdlt');
    $desc = new lang_string('allowborder_desc', 'atto_tablemsdlt');
    $default = 0;

    $setting = new admin_setting_configcheckbox('atto_tablemsdlt/allowborders',
                                                $name,
                                                $desc,
                                                $default);
    $settings->add($setting);

    $name = new lang_string('allowbackgroundcolour', 'atto_tablemsdlt');
    $default = 0;

    $setting = new admin_setting_configcheckbox('atto_tablemsdlt/allowbackgroundcolour',
                                                $name,
                                                '',
                                                $default);
    $settings->add($setting);

    $name = new lang_string('allowwidth', 'atto_tablemsdlt');
    $default = 0;

    $setting = new admin_setting_configcheckbox('atto_tablemsdlt/allowwidth',
                                                $name,
                                                '',
                                                $default);
    $settings->add($setting);
}
