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
 * @copyright  Claude Gex 2010 - 2011
 * @author     Claude Gex <mail@claudegex.ch>
 * @license    LGPL
 */


/**
 * Class ModuleGD_GoogleDirections
 *
 * @copyright  Claude Gex 2010 - 2011
 * @author     Claude Gex <mail@claudegex.ch>
 * @package    Controller
 */
class ModuleGD_GoogleDirections extends Module
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'mod_gd_googledirections';
   
    /**
     * Display a wildcard in the back end
     * @return string
     */
    public function generate()
    {
	if (TL_MODE == 'BE')
	{
	    $objTemplate = new backendTemplate('be_wildcard');
	    $objTemplate->wildcard = '### GOOGLE DIRECTIONS '.$this->name.' ###';

	    return $objTemplate->parse();
	}

	return parent::generate();
    }

    /**
     * Generate module
     */
    protected function compile()
    {
		$this->loadLanguageFile("tl_module");

		if($this->gd_googledirections_template)
		{
			$this->strTemplate = $this->gd_googledirections_template;
			$this->Template = new FrontendTemplate($this->strTemplate);
		}
		$this->Template->moduleId = $this->arrData[id];
		
		// the current language will be used to load the directions list
		$this->Template->lang = $GLOBALS['TL_LANGUAGE'];

		// load the google maps api (contao ensures that the script included only once, done through array_unique)
		$GLOBALS['TL_HEAD'][] = '<script src="http://maps.google.com/maps/api/js?v=3&amp;sensor=false&amp;hl='. $GLOBALS['TL_LANGUAGE'] . '" type="text/javascript"></script>';
		$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/gd_googledirections/html/gd_googledirections.js';

		// apply preset values
		$this->Template->from = $this->gd_googledirections_from;
		$this->Template->via = $this->gd_googledirections_via;
		$this->Template->to = $this->gd_googledirections_to;
		$this->Template->from_coords = $this->gd_googledirections_from_coords;
		$this->Template->via_coords = $this->gd_googledirections_via_coords;
		$this->Template->to_coords = $this->gd_googledirections_to_coords;
		$this->Template->to_readonly = $this->gd_googledirections_to_readonly;
		$this->Template->via_readonly = $this->gd_googledirections_via_readonly;
		$this->Template->from_readonly = $this->gd_googledirections_from_readonly;

		// apply the flag whether to add the via adress or not
		$this->Template->add_via = $this->gd_googledirections_via_add;

		// apply the flag whether to load the map on startup or not
		$this->Template->show_single_point = $this->gd_googledirections_show_single_point;

		// apply labels
		$this->Template->fromLabel = $this->getLabel($this->gd_googledirections_from_label, 'gd_googledirections_from_label_default');
		$this->Template->viaLabel = $this->getLabel($this->gd_googledirections_via_label, 'gd_googledirections_via_label_default');
		$this->Template->toLabel = $this->getLabel($this->gd_googledirections_to_label,'gd_googledirections_to_label_default');
		$this->Template->submitLabel = $this->getLabel($this->gd_googledirections_submit_label,'gd_googledirections_submit_label_default');

		// set error messages
		$this->Template->labels = json_encode(array(
			'invalidRequest' => $this->getLanguageLabel('gd_googledirection_invalid_request'),
			'maxWaypointExceeded' => $this->getLanguageLabel('gd_googledirection_max_waypoints_exceeded'),
			'notFound' => $this->getLanguageLabel('gd_googledirection_not_found'),
			'overQueryLimit' => $this->getLanguageLabel('gd_googledirection_over_query_limit'),
			'requestDenied' => $this->getLanguageLabel('gd_googledirection_request_denied'),
			'zeroResults' => $this->getLanguageLabel('gd_googledirection_zero_results'),
			'defaultError' => $this->getLanguageLabel('gd_googledirection_unknown_error')
		));

		// dimensions
		$listWidth = unserialize($this->gd_googledirections_list_width);
		$width = unserialize($this->gd_googledirections_width);
		$height = unserialize($this->gd_googledirections_height);
		$this->Template->listWidth = $listWidth['value'].$listWidth['unit'];
		$this->Template->width = $width['value'].$width['unit'];
		$this->Template->height = $height['value'].$height['unit'];

		
		// maybe there is a marker
		if ($this->gd_googledirections_marker)
		{
			$markerMap = array();
			if ($this->gd_googledirections_marker_coords)
			{
				$coords = $this->splitByComma($this->gd_googledirections_marker_coords);
				$markerMap['markerCoords']['lat'] = $coords[0];
				$markerMap['markerCoords']['lng'] = $coords[1];
			}
			if ($this->gd_googledirections_marker_icon)
			{
				$markerMap['icon']['size']['x'] = 0;
				$markerMap['icon']['size']['y'] = 0;
				
				$icondata = unserialize($this->gd_googledirections_marker_icon);
				$shadowdata = unserialize($this->gd_googledirections_marker_shadow);
				$icon = $icondata[0];
				$shadow = $shadowdata[0];
				
				$iconPath = TL_ROOT . '/' . $icon;
				if (!empty($icon) && file_exists($iconPath))
				{
					$size = getimagesize($iconPath);
					$markerMap['icon']['url'] = $icon;
					$markerMap['icon']['size']['x'] = (int) $size[0];
					$markerMap['icon']['size']['y'] = (int) $size[1];
				}
					
				$shadowPath = TL_ROOT . '/' . $shadow;
				if (!empty($shadow) && file_exists($shadowPath))
				{
					$size = getimagesize($shadowPath);
					$markerMap['shadow']['url'] = $shadow;
					$markerMap['shadow']['size']['x'] = (int) $size[0];
					$markerMap['shadow']['size']['y'] = (int) $size[1];
				}
				
				if ($this->gd_googledirections_marker_anchor)
				{
					$anchor = $this->splitByComma($this->gd_googledirections_marker_anchor);
					$markerMap['icon']['anchor']['x'] = (int) $anchor[0];
					$markerMap['icon']['anchor']['y'] = (int) $anchor[1];
					
					if(isset($markerMap['shadow'])) {
						$markerMap['shadow']['anchor']['x'] = (int) $anchor[0];
						$markerMap['shadow']['anchor']['y'] = (int) $anchor[1];
					}
				}
				else
				{
					$markerMap['icon']['anchor']['x'] = 0;
					$markerMap['icon']['anchor']['y'] = 0;
					if(isset($markerMap['shadow'])) {
						$markerMap['shadow']['anchor']['x'] = 0;
						$markerMap['shadow']['anchor']['y'] = 0;
					}
				}
			}

			// check for infowindow
			if ($this->gd_googledirections_infowindow_text)
			{
				$markerMap['infoWindow']['autoOpen'] = $this->gd_googledirections_infowindow_auto;
				$markerMap['infoWindow']['content'] = preg_replace("(\r\n|\n|\r)",'',(nl2br(str_replace('"','\"', $this->gd_googledirections_infowindow_text))));
				if ($this->gd_googledirections_infowindow_anchor)
				{
					$anchor = $this->splitByComma($this->gd_googledirections_infowindow_anchor);
					$markerMap['infoWindow']['anchor']['x'] = (int) $anchor[0];
					$markerMap['infoWindow']['anchor']['y'] = (int) $anchor[1];
				}
				else
				{
					$markerMap['infoWindow']['anchor']['x'] = 0;
					$markerMap['infoWindow']['anchor']['y'] = 0;
				}
			}
			
			$this->Template->markerMap = json_encode($markerMap);
		}
		
    }

	protected function splitByComma($str) {
		return explode(',',  str_replace(' ', '', $str));
	}
	
    protected function getLabel($value, $defaultKey)
    {
		$value = trim($value);
		return (strlen($value) > 0) ? $value : $this->getLanguageLabel($defaultKey);
    }
    protected function getLanguageLabel($key)
    {
		return $GLOBALS['TL_LANG']['tl_module'][$key];
    }
}

?>