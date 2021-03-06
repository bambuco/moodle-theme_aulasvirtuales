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
 * Moodle's aulasvirtuales theme.
 *
 *
 * @package   theme_aulasvirtuales
 * @copyright 2020 David Herney
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$THEME->name = 'aulasvirtuales';

$THEME->doctype = 'html5';
$THEME->parents = array('boost');
$THEME->sheets = array();
$THEME->editor_sheets = [];
$THEME->editor_scss = ['editor'];
$THEME->usefallback = true;

$THEME->layouts = [
    // Main course page.
    'course' => array(
        'file' => 'course.php',
        'regions' => array('side-pre', 'top', 'centertop'),
        'defaultregion' => 'side-pre',
        'options' => array('langmenu' => true),
    )
];

$THEME->scss = function($theme) {
    return theme_boost_get_main_scss_content($theme);
};

$THEME->enable_dock = false;
$THEME->csstreepostprocessor = 'theme_boost_css_tree_post_processor';
$THEME->extrascsscallback = 'theme_boost_get_extra_scss';
$THEME->prescsscallback = 'theme_boost_get_pre_scss';
$THEME->precompiledcsscallback = 'theme_boost_get_precompiled_css';
$THEME->yuicssmodules = array();
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->requiredblocks = '';
$THEME->addblockposition = BLOCK_ADDBLOCK_POSITION_FLATNAV;
$THEME->iconsystem = \core\output\icon_system::FONTAWESOME;
