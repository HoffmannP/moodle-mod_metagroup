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
 * Strings for component 'enrol_metagroup', language 'de'.
 *
 * @package   enrol_metagroup
 * @copyright 2010 onwards Petr Skoda  {@link http://skodak.org}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['linkedcourse']             = 'Kurs verbinden';
$string['metagroup:config']         = 'Meta-Einschreibung einer Gruppe konfigurieren';
$string['metagroup:selectaslinked'] = 'Kurs zur Meta-Verbindung einer Gruppe auswählen';
$string['metagroup:unenrol']        = 'Gesperrte Nutzer/innen aus Kursen abmelden';
$string['nosyncroleids']            = 'Nichtsynchronisierte Rollen';
$string['nosyncroleids_desc']       = 'Standardmäßig werden alle kursbezogenen Rollenzuweisungen auf verbundene Kurse übertragen (from ' .
    'parent to child). Die ausgewählten Rollen werden nicht in die Synchronisation einbezogen. Die zur Synchronisation vorgesehenen ' .
    'Rollen werden mit der nächsten Ausführung des Cronjobs aktualisiert.';
$string['pluginname']               = 'Meta-Einschreibung einer Gruppe';
$string['pluginname_desc']          = 'Das Plugin Meta-Einschreibung synchronisiert die Einschreibungen und Rollen in aus einer Gruppe ' .
    'des Quell-Kurses in einen Ziel-Kurs.';
$string['syncall']                  = 'Eingeschriebene Nutzer/innen synchronisieren';
$string['syncall_desc']             = 'Wenn diese Option aktiviert ist, werden alle Nutzer/innen synchronisiert, auch wenn sie in der ' .
    'ausgewählten Gruppe des Hauptkurs keine Rolle haben. Wenn diese Option deaktiviert ist, werden nur Nutzer/innen in Metakurse ' .
    'synchronisiert, die in der ausgewählten Gruppe des Hauptkurses mindestens eine Rolle besitzen.';
$string['handlecsv']                = 'Importieren aus CSV';
$string['csvfile']                  = 'CSV Datei';
$string['import']                   = 'Import';
$string['next']         = 'Nächstes';
$string['csvfileerror'] = 'Ungültige CSV Datei';
$string['linkedgroup']  = 'Verbundene Gruppe';
$string['remarks']      = 'Anmerkungen';
$string['course']       = 'Kurs';

$string['form:field_id']   = 'Kurs ID';
$string['form:field_name'] = 'Kurs Name';
$string['form:searchterm'] = 'Kurssuche';
$string['form:group']      = 'Gruppe';

$string['select:no_courses'] = 'Keinen Kurs gefunden';
$string['select:no_groups']  = 'Keine Gruppen gefunden';

$string['format_error']      = 'Formatfehler, drei Felder pro Zeile';
$string['course_error']      = 'Ungültiger Kurs';
$string['link_course_error'] = 'Ungültiger Kurs zum verbinden';
$string['link_group_error']  = 'Ungültige Gruppe zum verbinden';
$string['existing_error']    = 'Einschreibung existiert bereits';
$string['eligibile']         = 'Einschreibung wird hinzugefügt';

$string['tableheading']      = 'Lehrkraft / Gruppe';
$string['dosplitbutton']     = 'Raum in Gruppenräume teilen';