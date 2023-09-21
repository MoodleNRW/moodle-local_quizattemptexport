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
 * @package local_quizattemptexport
 * @author Ralf Wiederhold <ralf.wiederhold@eledia.de>
 * @copyright Ralf Wiederhold 2022
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

defined('MOODLE_INTERNAL') || die();

function xmldb_local_quizattemptexport_install() {
    global $DB;

    // Call code for migrating data from the old HSNR branded version of this plugin.
    \local_quizattemptexport\util::migrate_old_hsnr_data();

    return true;
}
