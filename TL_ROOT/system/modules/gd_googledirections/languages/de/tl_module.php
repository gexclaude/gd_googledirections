<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005-2009 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright  Claude Gex 2010
 * @author     Claude Gex <mail@claudegex.ch>
 * @license    LGPL
 */

/**
 * Frontend Labels
 */
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_from_label_default']= 'Startadresse';
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_via_label_default']= 'Via';
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_to_label_default']= 'Zieladresse';
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_submit_label_default']= 'Route berechnen';

/**
 * Error Labels
 */
$GLOBALS['TL_LANG']['tl_module']['gd_googledirection_check_input'] = 'Bitte überprüfen Sie Ihre Eingaben und wiederholen Sie den Vorgang.';

// =400
$GLOBALS['TL_LANG']['tl_module']['gd_googledirection_bad_request'] = 'Die Routenabfrage ist fehlerhaft.';
// =500
$GLOBALS['TL_LANG']['tl_module']['gd_googledirection_server_error'] = 'Die Routenabfrage konnte nicht durchgeführt werden. Bitte wiederholen Sie den Vorgang später.';
// =601
$GLOBALS['TL_LANG']['tl_module']['gd_googledirection_missing_query'] = 'Die Routenabfrage ist leer!';
// =602
$GLOBALS['TL_LANG']['tl_module']['gd_googledirection_unknown_address'] = 'Eine der eingegebenen Adressen konnte nicht gefunden werden.' . $GLOBALS['TL_LANG']['tl_module']['googledirection_check_input'];
// =603
$GLOBALS['TL_LANG']['tl_module']['gd_googledirection_unavailable_address'] = 'Eine der eingegebenen Adressen steht nicht zur Verfügung.';
// =604
$GLOBALS['TL_LANG']['tl_module']['gd_googledirection_unknown_directions'] = 'Die Route konnte nicht berechnet werden, entweder stehen die benötigten Daten nicht zur Verfügung oder es existiert keine Route zwischen den beiden Punkten.';
// =610
$GLOBALS['TL_LANG']['tl_module']['gd_googledirection_bad_key'] = 'Der verwendete Key ist ungültig.';
// =620, evtl. andere
$GLOBALS['TL_LANG']['tl_module']['gd_googledirection_default_error'] = 'Ein unbekannter Fehler ist aufgetreten.' . $GLOBALS['TL_LANG']['tl_module']['googledirection_check_input'] ;

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_from']= array('Startadresse', 'Die Startadresse zur Routenberechnung. (Bspw. Bundesgasse 10, Bern)');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_via']= array('Via-Adresse', 'Ein Wegpunkt zwischen der Start- und der Zieladresse. (Bspw. Bundesgasse 10, Bern)');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_to']= array('Zieladresse', 'Die Zieladresse zur Routenberechnung. (Bspw. Bundesgasse 10, Bern)');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_from_readonly']= array('Startadresse nur lesbar', 'Die Startaddresse zur Routenberechnung kann vom Besucher nicht verändert werden.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_to_readonly']= array('Zieladresse nur lesbar', 'Die Zieladresse zur Routenberechnung kann vom Besucher nicht verändert werden.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_via_readonly']= array('Via-Adresse nur lesbar', 'Die Via-Adresse zur Routenberechnung kann vom Besucher nicht verändert werden.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_from_coords']= array('Koordinaten des Startortes', 'Die Koordinaten des Startortes. Die Koordinaten werden, falls erfasst, anstelle der Startadresse verwendet. Die Startadresse dient dann nur noch zur Anzeige.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_via_coords']= array('Koordinaten des Wegpunktes', 'Die Koordinaten des Wegpunktes zwischen der Start- und der Zieladresse. Die Koordinaten werden, falls erfasst, anstelle der Startadresse verwendet. Die Via-Adresse dient dann nur noch zur Anzeige.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_to_coords']= array('Koordinaten des Zielortes', 'Die Koordinaten des Zielortes. Die Koordinaten werden, falls erfasst, anstelle der Zieladresse verwendet. Die Zieladresse dient dann nur noch zur Anzeige.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_from_label']= array('Alternative Bezeichnung für \'' . $GLOBALS['TL_LANG']['tl_module']['gd_googledirections_from_label_default'] . '\'', 'Optional');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_via_label']= array('Alternative Bezeichnung für \'' . $GLOBALS['TL_LANG']['tl_module']['gd_googledirections_via_label_default'] . '\'', 'Optional');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_to_label']= array('Alternative Bezeichnung für \'' . $GLOBALS['TL_LANG']['tl_module']['gd_googledirections_to_label_default'] . '\'', 'Optional');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_submit_label']= array('Alternative Bezeichnung für \'' . $GLOBALS['TL_LANG']['tl_module']['gd_googledirections_submit_label_default'] . '\'', 'Optional');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_show_single_point']= array('Anzeigen der Ziel- oder Startadresse beim Seitenaufruf', 'Zeigt die Ziel- oder Startadresse nach dem Laden der Seite an.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_via_add']= array('Eine Via-Adresse einfügen', 'Erlaubt es einen zusätzlichen Wegpunkt zwischen der Start- und der Zieladresse zu erfassen');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_template']= array('Template', 'Verwendetes Template.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_width']= array('Breite', 'Bitte geben Sie die Breite der Karte ein.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_height']= array('Höhe', 'Bitte geben Sie die Höhe der Karte ein.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_marker']= array('Eine Markierung in die Karte einfügen', 'Es können ein Standard-Icon oder eine individuelle Grafik sowie eine Textbox eingefügt werden.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_marker_coords']= array('Koordinaten der Markierung', 'Die Koordinaten der Markierung können von der Kartenmitte abweichen. Ein leeres Feld setzt die Markierung in die Kartenmitte.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_marker_icon']= array('Individuelles Icon', 'Es kann ein eigenes Icon verwendet werden, z.B. ein Firmenlogo. Ohne Auswahl wird das Standard-Icon von Google verwendet.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_marker_shadow']= array('Individueller Schatten', 'Auch für eigene Icons können Schatten gesetzt werden.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_marker_anchor']= array('Position der Markierung', 'Die Position der Markierung kann über ein Koordinatenpaar LINKS,RAUF verändert werden. 5,10 verschiebt die Box z.B. von der linken oberen Ecke des Icons um 5 Pixel nach links und 10 Pixel nach oben.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_infowindow_text']= array('Inhalt der Textbox', 'Es können einfache Formatierungen verwendet werden.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_infowindow_anchor']= array('Position der Textbox', 'Die Position der Textbox kann über ein Koordinatenpaar RECHTS,RUNTER verändert werden. 10,5 verschiebt die Box z.B. von der linken oberen Ecke des Icons um 10 Pixel nach rechts und 5 Pixel nach unten.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_infowindow_auto']= array('Textbox automatisch öffnen', 'Wenn deaktiviert, öffnet sich die Textboxnur durch einen Klick auf das Icon.');

$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_list_width']= array('Breite der Liste', 'Bitte geben Sie die Breite der Routenliste ein.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_module']['gd_directions_legend']= 'Routenplaner konfigurieren';
$GLOBALS['TL_LANG']['tl_module']['gd_directions_via_add_legend']= 'Via-Adresse';
$GLOBALS['TL_LANG']['tl_module']['gd_directions_marker_legend']= 'Markierungen';

?>