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
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_from_label_default']= 'Start address';
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_via_label_default']= 'Via';
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_to_label_default']= 'Destination address';
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_submit_label_default']= 'Get directions!';

/**
 * Error Labels
 */
$GLOBALS['TL_LANG']['tl_module']['gd_googledirection_check_input'] = 'Please verify your inputs and try again.';

// =400
//$GLOBALS['TL_LANG']['tl_module']['gd_googledirection_bad_request'] = 'A directions request could not be successfully parsed.';
// =500
//$GLOBALS['TL_LANG']['tl_module']['gd_googledirection_server_error'] = 'The directions request could not be processed. Please try again.';
// =601
//$GLOBALS['TL_LANG']['tl_module']['gd_googledirection_missing_query'] = 'The directions request is empty!';
// =602
//$GLOBALS['TL_LANG']['tl_module']['gd_googledirection_unknown_address'] = 'No corresponding geographic location could be found for the specified address. This may be due to the fact that the address is relatively new, or it may be incorrect.' . $GLOBALS['TL_LANG']['tl_module']['googledirection_check_input'];
// =603
//$GLOBALS['TL_LANG']['tl_module']['gd_googledirection_unavailable_address'] = 'The geocode for the given address or the route for the given directions query cannot be returned due to legal or contractual reasons.';
// =604
//$GLOBALS['TL_LANG']['tl_module']['gd_googledirection_unknown_directions'] = 'The directions between the points mentioned in the query could not be computed. This is usually because there is no route available between the two points, or because we do not have data for routing in that region.';
// =610
//$GLOBALS['TL_LANG']['tl_module']['gd_googledirection_bad_key'] = '	 The given key is either invalid or does not match the domain for which it was given. ';
// =620, evtl. andere

$GLOBALS['TL_LANG']['tl_module']['gd_googledirection_invalid_request'] = 'A directions request could not be successfully parsed.';
$GLOBALS['TL_LANG']['tl_module']['gd_googledirection_max_waypoints_exceeded'] = 'The number of allowed waypoints exceeded.';
$GLOBALS['TL_LANG']['tl_module']['gd_googledirection_not_found'] = 'No corresponding geographic location could be found for the specified address. This may be due to the fact that the address is relatively new, or it may be incorrect.' . $GLOBALS['TL_LANG']['tl_module']['googledirection_check_input'];
$GLOBALS['TL_LANG']['tl_module']['gd_googledirection_over_query_limit'] = 'The webpage has gone over the requests limit in too short a period of time.';
$GLOBALS['TL_LANG']['tl_module']['gd_googledirection_request_denied'] = 'The webpage is not allowed to use the directions service.';
$GLOBALS['TL_LANG']['tl_module']['gd_googledirection_unknown_error'] = 'An unknown error occurred.' . $GLOBALS['TL_LANG']['tl_module']['googledirection_check_input'] ;
$GLOBALS['TL_LANG']['tl_module']['gd_googledirection_zero_results'] = 'No route could be found.';

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_from']= array('Start address', 'The start address used for the destination computations. (e.g. Bundesgasse 10, Bern)');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_via']= array('Via address', 'A waypoint between the start and the destination address. (e.g. Bundesgasse 10, Bern)');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_to']= array('Destination address', 'The destination address for the destination computations. (e.g. Bundesgasse 10, Bern)');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_from_coords']= array('Coordinates of the start point', 'If entered the coordinates will be used instead of the start address. The start address will only be used to display');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_via_coords']= array('Coordinates of the waypoint', 'If entered the coordinates will be used instead of the waypoint address. The waypoint address will only be used to display');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_to_coords']= array('Coordinates of the destination', 'If entered the coordinates will be used instead of the destination address. The destination address will only be used to display');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_from_readonly']= array('Start adress readonly', 'The start address cannot be modified by the visitor.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_via_readonly']= array('Via adress readonly', 'The waypoint address cannot be modified by the visitor.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_to_readonly']= array('Destination address readonly', 'The destination address cannot be modified by the visitor.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_from_label']= array('Alternative label for \'' . $GLOBALS['TL_LANG']['tl_module']['gd_googledirections_from_label_default'] . '\'', 'Optional');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_via_label']= array('Alternative label for \'' . $GLOBALS['TL_LANG']['tl_module']['gd_googledirections_via_label_default'] . '\'', 'Optional');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_to_label']= array('Alternative label for \'' . $GLOBALS['TL_LANG']['tl_module']['gd_googledirections_to_label_default'] . '\'', 'Optional');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_submit_label']= array('Alternative label for \'' . $GLOBALS['TL_LANG']['tl_module']['gd_googledirections_submit_label_default'] . '\'', 'Optional');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_show_single_point']= array('Show the destination or start location on load', 'Shows the destination or start location as soon as the page is loaded');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_via_add']= array('Add a via address (waypoint)', 'Allows to enter a waypoint between the start and the destination address');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_template']= array('Template', 'Used Template.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_width']= array('Width', 'Please enter the map width.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_height']= array('Height', 'Please enter the map height.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_marker']= array('Integrate a marker or icon', 'You can integrate a standard marker or an individual icon as well as a text box.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_marker_coords']= array('Coordinates of the marker', 'The coordinates of the marker can differ from the map center. Leaving this blank will center the marker on the map.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_marker_icon']= array('Individual icon', 'You can choose an individual icon, e.g. a company logo. Without specifying the standard Google icon is set.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_marker_shadow']= array('Individual shadow', 'Individual shadows can be set for individual icons.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_marker_anchor']= array('Position of the icon', 'The position of the icon can be changed by coordinate LEFT,UP. 5,10 e.g. moves the icon by 5 pixels to the left and 10 pixels up from the upper left corner of the icon.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_infowindow_text']= array('Content of the text box', 'You can use simple Html formats.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_infowindow_anchor']= array('Position of the text box', 'The position of the text box can be changed by coordinates RIGHT,DOWN. 10,5 e.g. moves the box by 10 pixels to the right and 5 pixels down from the upper left corner of the icon.');
$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_infowindow_auto']= array('Open text box automatically', 'If deactivated, the text box opens on click only.');

$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_list_width']= array('Directions list width', 'Please enter the width of the directions list.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_module']['gd_directions_legend']= 'Route planner configuration';
$GLOBALS['TL_LANG']['tl_module']['gd_directions_via_add_legend']= 'Via adresse';
$GLOBALS['TL_LANG']['tl_module']['gd_directions_marker_legend']= 'Marker';

?>