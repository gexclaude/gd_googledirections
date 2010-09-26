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
 * Add selectors to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'gd_googledirections_marker';
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'gd_googledirections_via_add';

/**
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['gd_googledirections'] = '{title_legend},name,type,headline;{gd_directions_legend},gd_googledirections_from,gd_googledirections_to,gd_googledirections_from_coords,gd_googledirections_to_coords,gd_googledirections_from_readonly,gd_googledirections_to_readonly,gd_googledirections_from_label,gd_googledirections_to_label,gd_googledirections_submit_label,gd_googledirections_width,gd_googledirections_height,gd_googledirections_list_width,gd_googledirections_template;{gd_directions_marker_legend},gd_googledirections_marker;{gd_directions_via_add_legend},gd_googledirections_via_add;{protected_legend},guests,protected;{expert_legend},align,space,cssID';

/**
 * Add subpalettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['gd_googledirections_marker'] = 'gd_googledirections_marker_coords,gd_googledirections_marker_icon,gd_googledirections_marker_shadow,gd_googledirections_marker_anchor,gd_googledirections_infowindow_text,gd_googledirections_infowindow_anchor,gd_googledirections_infowindow_auto';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['gd_googledirections_via_add'] = 'gd_googledirections_via,gd_googledirections_via_coords,gd_googledirections_via_readonly,gd_googledirections_via_label';

/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['gd_googledirections_from'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_from'],
	'inputType'               => 'text',
	'search'                  => false,
	'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50'),
);
$GLOBALS['TL_DCA']['tl_module']['fields']['gd_googledirections_via'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_via'],
	'inputType'               => 'text',
	'search'                  => false,
	'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50'),
);
$GLOBALS['TL_DCA']['tl_module']['fields']['gd_googledirections_to'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_to'],
	'inputType'               => 'text',
	'search'                  => false,
	'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50'),
);
$GLOBALS['TL_DCA']['tl_module']['fields']['gd_googledirections_from_coords'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_from_coords'],
	'inputType'               => 'text',
	'search'                  => false,
	'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50'),
);
$GLOBALS['TL_DCA']['tl_module']['fields']['gd_googledirections_via_coords'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_via_coords'],
	'inputType'               => 'text',
	'search'                  => false,
	'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50'),
);
$GLOBALS['TL_DCA']['tl_module']['fields']['gd_googledirections_to_coords'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_to_coords'],
	'inputType'               => 'text',
	'search'                  => false,
	'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50'),
);
$GLOBALS['TL_DCA']['tl_module']['fields']['gd_googledirections_from_readonly'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_from_readonly'],
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
);
$GLOBALS['TL_DCA']['tl_module']['fields']['gd_googledirections_via_readonly'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_via_readonly'],
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
);
$GLOBALS['TL_DCA']['tl_module']['fields']['gd_googledirections_to_readonly'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_to_readonly'],
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
);
$GLOBALS['TL_DCA']['tl_module']['fields']['gd_googledirections_via_label'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_via_label'],
	'inputType'               => 'text',
	'search'                  => false,
	'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50'),
);
$GLOBALS['TL_DCA']['tl_module']['fields']['gd_googledirections_from_label'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_from_label'],
	'inputType'               => 'text',
	'search'                  => false,
	'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50'),
);
$GLOBALS['TL_DCA']['tl_module']['fields']['gd_googledirections_to_label'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_to_label'],
	'inputType'               => 'text',
	'search'                  => false,
	'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50'),
);
$GLOBALS['TL_DCA']['tl_module']['fields']['gd_googledirections_submit_label'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_submit_label'],
	'inputType'               => 'text',
	'search'                  => false,
	'eval'                    => array('mandatory'=>false, 'maxlength'=>255),
);
$GLOBALS['TL_DCA']['tl_module']['fields']['gd_googledirections_via_add'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_via_add'],
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true)
);
$GLOBALS['TL_DCA']['tl_module']['fields']['gd_googledirections_template'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_template'],
	'default'                 => 'mod_gd_googledirections',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => $this->getTemplateGroup('mod_gd_googledirections')
);
$GLOBALS['TL_DCA']['tl_module']['fields']['gd_googledirections_width'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_width'],
	'inputType'               => 'inputUnit',
	'default'                 => '400',
	'options'                  => array('px','%','em','pt','pc','in','cm','mm'),
	'search'                  => false,
	'eval'                    => array('mandatory'=>true, 'rgxp'=>digit,'maxlength'=>64, 'tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_module']['fields']['gd_googledirections_height'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_height'],
	'inputType'               => 'inputUnit',
	'default'                 => '400',
	'options'                  => array('px','%','em','pt','pc','in','cm','mm'),
	'search'                  => false,
	'eval'                    => array('mandatory'=>true, 'rgxp'=>digit,'maxlength'=>64, 'tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_module']['fields']['gd_googledirections_marker'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_marker'],
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true)
);
$GLOBALS['TL_DCA']['tl_module']['fields']['gd_googledirections_marker_coords'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_marker_coords'],
	'inputType'               => 'text',
	'search'                  => false,
	'eval'                    => array('mandatory'=>false, 'maxlength'=>255)
);
$GLOBALS['TL_DCA']['tl_module']['fields']['gd_googledirections_marker_icon'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_marker_icon'],
	'inputType'               => 'fileTree',
	'search'                  => false,
	'eval'                    => array('files'=>true,'filesOnly'=>true,'fieldType'=>checkbox,'mandatory'=>false, 'maxlength'=>255)
);
$GLOBALS['TL_DCA']['tl_module']['fields']['gd_googledirections_marker_shadow'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_marker_shadow'],
	'inputType'               => 'fileTree',
	'search'                  => false,
	'eval'                    => array('files'=>true,'filesOnly'=>true,'fieldType'=>checkbox,'mandatory'=>false, 'maxlength'=>255)
);
$GLOBALS['TL_DCA']['tl_module']['fields']['gd_googledirections_marker_anchor'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_marker_anchor'],
	'inputType'               => 'text',
	'search'                  => false,
	'eval'                    => array('mandatory'=>false, 'maxlength'=>64)
);
$GLOBALS['TL_DCA']['tl_module']['fields']['gd_googledirections_infowindow_text'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_infowindow_text'],
	'inputType'               => 'textarea',
	'search'                  => false,
	'eval'                    => array('rows'=>4,'maxlength'=>255,'allowHtml'=>true)
);
$GLOBALS['TL_DCA']['tl_module']['fields']['gd_googledirections_infowindow_anchor'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_infowindow_anchor'],
	'inputType'               => 'text',
	'search'                  => false,
	'eval'                    => array('mandatory'=>false, 'maxlength'=>64)
);
$GLOBALS['TL_DCA']['tl_module']['fields']['gd_googledirections_infowindow_auto'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_infowindow_auto'],
	'exclude'                 => false,
	'inputType'               => 'checkbox'
);
$GLOBALS['TL_DCA']['tl_module']['fields']['gd_googledirections_list_width'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['gd_googledirections_list_width'],
	'inputType'               => 'inputUnit',
	'default'                 => '400',
	'options'                  => array('px','%','em','pt','pc','in','cm','mm'),
	'search'                  => false,
	'eval'                    => array('mandatory'=>true, 'rgxp'=>digit,'maxlength'=>64)
);

?>