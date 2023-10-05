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
 * German language strings.
 *
 * @package    local_quizattemptexport
 * @author     Ralf Wiederhold <ralf.wiederhold@eledia.de>
 * @copyright  Ralf Wiederhold 2020
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attachmentexport_filenamechunk_questionno'] = 'Frage';
$string['attachmentexport_filenamechunk_attachment'] = 'Anhang';
$string['attemptresult'] = '{$a->gradeachieved} von {$a->grademax} Punkten ({$a->gradepercent}%)';
$string['ddimageortext_correctanswer_title'] = 'Korrekte Antworten';
$string['ddmarker_correctanswer_title'] = 'Korrekte Antworten';
$string['ddwtos_emptydrop_placeholderstr'] = '-----------------';
$string['except_attemptnotinquiz'] = 'Dieser Versuch gehört nicht zu diesem Quiz.';
$string['except_configinvalid'] = 'Eine Einstellung des Plugins "local_quizattemptexport" fehlt entweder oder enthält einen fehlerhaften Wert: {$a}';
$string['except_dirmissing'] = 'Verzeichnis existiert nicht: {$a}';
$string['except_dirnotwritable'] = 'Verzeichnis ist nicht beschreibbar: {$a}';
$string['except_usernoidnumber'] = 'Der Nutzer hat keine "idnumber". Nutzer-ID: {$a}';
$string['except_usernotfound'] = 'Der Nutzer konnte nicht gefunden werden. Nutzer-ID: {$a}';
$string['label_coursename'] = 'Prüfung';
$string['label_quizname'] = 'Quiz';
$string['label_studentname'] = 'Teilnehmer*in';
$string['label_matriculationid'] = 'Matrikelnummer';
$string['label_coursecode'] = 'Quiz Code';
$string['label_attemptstarted'] = 'Versuch gestartet';
$string['label_attemptended'] = 'Versuch beendet';
$string['label_attemptresult'] = 'Ergebnis';
$string['nav_exportoverview'] = 'PDF-Export dieser Test-Aktivität';
$string['page_overview_title'] = 'Exporte für "{$a}"';
$string['page_overview_attemptedreexport'] = 'Es wurde probiert, den Versuch erneut zu exportieren.';
$string['page_overview_progressbar_step'] = 'Exportiere Versuch mit ID "{$a}".';
$string['page_overview_progressbar_finished'] = 'Exportieren aller Versuche abgeschlossen.';
$string['setting_usersattemptslist_heading'] = 'Versuchs-Übersichtsseite';
$string['plugindesc'] = 'Automatischer Export aller Quiz-Versuche.';
$string['pluginname'] = 'Quiz PDF-Export';
$string['setting_autoexport'] = 'Aktiviere automatischen Export';
$string['setting_autoexport_desc'] = 'Aktivieren Sie diese Einstellung, um jeden Quiz-Versuch automatisch zu exportieren, wenn der Benutzer den Versuch einreicht.';
$string['setting_catfilter'] = 'Kategoriefilter';
$string['setting_catfilter_desc'] = 'Wählen Sie die Kurskategorien innerhalb derer der automatische Export aktiv sein soll. Es werden nur die Quizversuche automatisch exportiert, die in Kursen stattfinden die in einer der hier ausgewählten Kategorien sind. Unterkategorien von Kategorien die ausgewählt wurden, sind implizit mit ausgewählt. <br><br>Nutzen Sie STRG+Mausklick um mehrere Kurskategorien auszuwählen.';
$string['setting_exportfilesystem'] = 'Export in das Dateisystem auf dem Server';
$string['setting_exportfilesystem_desc'] = 'Aktivieren Sie diese Option, um PDFs auch in das Dateisystem des Servers zu exportieren. 
        <br><br> Jeder eingereichte Versuch wird als PDF exportiert und über das Verwaltungsmenü der jeweiligen Quizinstanzen bereitgestellt, 
        wo sie einzeln heruntergeladen oder bequem in einem ZIP-Archiv zusammengefasst werden können. Außerdem möchten Sie vielleicht, 
        dass diese Dateien in einen Pfad innerhalb des Dateisystems Ihres Servers exportiert werden, wo Serverprozesse wie Archivierungsjobs auf diese Dateien zugreifen können. 
        <br><br>Aktivieren Sie diese Option, um die Dateien zusätzlich in das in der Einstellung unten definierte Verzeichnis exportieren zu lassen.';
$string['setting_mathjaxenable'] = 'Aktiviere MathJax Schriftsatz';
$string['setting_mathjaxenable_desc'] = 'Aktiviert das Setzen mathematischer Eingaben mit MathJax';
$string['setting_mathjaxdelay'] = 'MathJax Verarbeitungsverzögerung (Sekunden)';
$string['setting_mathjaxdelay_desc'] = 'Die Verwendung des MathJax-Schriftsatzes erfordert eine Verarbeitungsverzögerung für jede generierte PDF-Datei, die es MathJax ermöglicht, 
        die Verarbeitung/den Satz abzuschließen. Der Standardwert sollte die meisten Fälle abdecken. Wenn Ihre Quizinstanzen viele mathematische Eingaben enthalten und
        nicht alle diese Eingaben gesetzt wurden, müssen Sie diesen Wert möglicherweise auf einen höheren Wert setzen.';
$string['setting_pdfexportdir'] = 'Export Pfad auf dem Server';
$string['setting_pdfexportdir_desc'] = 'Dies ist der Pfad eines Verzeichnisses im Dateisystem Ihres Servers, in dem die PDFs zusätzlich gespeichert werden, 
        wenn Sie die obige Option aktivieren.';
$string['setting_pdfgenerationtimeout'] = 'Timeout für die PDF-Erstellung (Sekunden)';
$string['setting_pdfgenerationtimeout_desc'] = 'Stellen Sie den Timeout in Sekunden ein, der für die Generierung der PDF-Dateien gelten soll. 
        Wenn der Generierungsprozess nach der angegebenen Zeit nicht abgeschlossen ist, wird der Prozess abgebrochen. Stellen Sie den Wert 0 ein, 
        um das Timeout zu deaktivieren.';
$string['task_generate_pdf_name'] = 'Erstelle PDF-Exporte';
$string['setting_usersattemptslist_intro'] = 'Export Übersicht Einleitung';
$string['setting_usersattemptslist_intro_description'] = 'Hier können Sie einen Text eintragen, der oben auf der Export Übersichtsseite angezeigt wird.';
$string['setting_dynamicfilenameheading'] = 'Einstellungen für dynamische Dateinamen';
$string['setting_dynamicfilenameheading_desc'] = 'Alle Einstellungen für den dynamischen Dateinamen.';
$string['setting_dynamicfilename'] = 'Dynamischer Dateiname';
$string['setting_dynamicfilename_desc'] = 'Geben Sie das Format für den Dateinamen ein oder benutzen Sie die Buttons. <br>
        Sie können die folgenden Platzhalter verwenden: <code>QUIZNAME, USERID, USERNAME, ATTEMPTID</code> <br>
        Sie können jeden anderen Text als statischen Text verwenden. Tippfehler werden in statischen Text umgewandelt. <br>
        Verwenden Sie <code style="font-size:150%">-</code> oder <code style="font-size:120%">_</code> als Trennzeichen. <br>
        Beispiel: <code>prefix_QUIZNAME_USERID_ATTEMPTID</code>';
$string['setting_dynamicfilenamehashalgo'] = 'Hash-Algorithmus';
$string['setting_dynamicfilenamehashalgo_desc'] = 'Wählen Sie den Hash-Algorithmus aus, der im Dateinamen des exportierten PDFs verwendet werden soll.';
$string['setting_dynamicfilenamehashlength'] = 'Hash-Länge';
$string['setting_dynamicfilenamehashlength_desc'] = 'Wählen Sie die Länge des im Dateinamen des exportierten PDFs verwendeten Hash-Wertes aus.';
$string['filename_quizname'] = 'Quizname';
$string['filename_idname'] = 'ID-Name';
$string['filename_username'] = 'Username';
$string['filename_attemptid'] = 'Versuchs-ID';
$string['filename_slot'] = 'Versuchs-Slot';
$string['filename_contexthash'] = 'Kontext Hashwert';
$string['filename_filenametimestamp'] = 'Datum File';

$string['task_generate_pdf_name'] = 'Erstelle PDF-Exporte';

$string['template_usersattemptslist_attachmentexportheader'] = 'Vom Nutzer hochgeladene Dateianhänge';
$string['template_usersattemptslist_attemptfrom'] = 'Versuch vom';
$string['template_usersattemptslist_exportall'] = 'Alle Versuche in dieser Quizinstanz erneut exportieren';
$string['template_usersattemptslist_noattempts'] = 'Für dieses Quiz konnten keine Versuche gefunden werden.';
$string['template_usersattemptslist_nofiles'] = 'Für diesen Versuch konnten keine Dateien gefunden werden.';
$string['template_usersattemptslist_pdfexportheader'] = 'Generierte PDF Dateien';
$string['template_usersattemptslist_reexportattempttitle'] = 'Versuch erneut exportieren';
$string['template_usersattemptslist_zipdownload'] = 'Alle exportierten Dateien als Zip-Archiv herunterladen';
$string['envcheck_execfailed'] = 'Problem beim Versuch einen CLI Aufruf abzusetzen.';
$string['envcheck_notexecutable'] = 'Das im Plugin enthaltene Binary muss durch den Webserver-User ausführbar sein. Details sind in der Readme beschrieben.';
$string['envcheck_sharedlibsmissing'] = 'Dem enthaltenen Binary fehlen shared Libraries: {$a}';
$string['envcheck_success'] = 'Alle Voraussetzungen erfüllt.';
