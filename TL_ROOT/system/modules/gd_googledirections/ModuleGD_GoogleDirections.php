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
 * Class ModuleGD_GoogleDirections
 *
 * @copyright  Claude Gex 2010
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

	$rootId = $this->getRootIdFromUrl();
	$pageDetails = $this->getPageDetails($rootId);

	$this->Template->google_id = $pageDetails->gd_googlemaps_id;
	// the current language will be used to load the directions list
	$this->Template->lang = $GLOBALS['TL_LANGUAGE'];

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

	// aply the flag whether to add the via adress or not
	$this->Template->add_via = $this->gd_googledirections_via_add;

	// apply labels
	$this->Template->fromLabel = $this->getLabel($this->gd_googledirections_from_label, 'gd_googledirections_from_label_default');
	$this->Template->viaLabel = $this->getLabel($this->gd_googledirections_via_label, 'gd_googledirections_via_label_default');
	$this->Template->toLabel = $this->getLabel($this->gd_googledirections_to_label,'gd_googledirections_to_label_default');
	$this->Template->submitLabel = $this->getLabel($this->gd_googledirections_submit_label,'gd_googledirections_submit_label_default');

	// set error messages
	$this->Template->badRequest = $this->getLanguageLabel('gd_googledirection_bad_request');
	$this->Template->serverError = $this->getLanguageLabel('gd_googledirection_server_error');
	$this->Template->missingQuery = $this->getLanguageLabel('gd_googledirection_missing_query');
	$this->Template->unknownAddress = $this->getLanguageLabel('gd_googledirection_unknown_address');
	$this->Template->unavailableAddress = $this->getLanguageLabel('gd_googledirection_unavailable_address');
	$this->Template->unknownDirections = $this->getLanguageLabel('gd_googledirection_unknown_directions');
	$this->Template->badKey = $this->getLanguageLabel('gd_googledirection_bad_key');
	$this->Template->defaultError = $this->getLanguageLabel('gd_googledirection_default_error');

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
	    $this->Template->marker = true;
	    if ($this->gd_googledirections_marker_coords)
	    {
		    $this->Template->marker_coords = $this->gd_googledirections_marker_coords;
	    }
	    else
	    {
		    $this->Template->marker_coords = $this->gd_googledirections_coords;
	    }
	    if ($this->gd_googledirections_marker_icon)
	    {
		    $icondata = unserialize($this->gd_googledirections_marker_icon);
		    $shadowdata = unserialize($this->gd_googledirections_marker_shadow);
		    $icon = $icondata[0];
		    $shadow = $shadowdata[0];
		    $this->Template->icon = $icon;
		    $this->Template->shadow = $shadow;
		    if (file_exists(TL_ROOT . '/' . $icon))
		    {
			    $size = getimagesize(TL_ROOT . '/' . $icon);
			    $this->Template->iconsize = $size[0] . "," . $size[1];
		    }
		    else
		    {
			    $this->Template->iconsize = "0,0";
			    $this->Template->iconanchor = "0,0";
		    }
		    if (file_exists(TL_ROOT . '/' . $shadow))
		    {
			    $size = getimagesize(TL_ROOT . '/' . $shadow);
			    $this->Template->shadowsize = $size[0] . "," . $size[1];
		    }
		    else
		    {
			    $this->Template->shadowsize = "0,0";
		    }
		    if ($this->gd_googledirections_marker_anchor)
		    {
			    $this->Template->iconanchor = $this->gd_googledirections_marker_anchor;
		    }
		    else
		    {
			    $this->Template->iconanchor = "0,0";
		    }
	    }

	    // check for infowindow
	    if ($this->gd_googledirections_infowindow_text)
	    {
		    $this->Template->infowindow = true;
		    $this->Template->infowindow_auto = $this->gd_googledirections_infowindow_auto;
		    $this->Template->infowindow_text = preg_replace("(\r\n|\n|\r)",'',(nl2br(str_replace('"','\"', $this->gd_googledirections_infowindow_text))));
		    if ($this->gd_googledirections_infowindow_anchor)
		    {
			    $this->Template->infowindow_anchor = $this->gd_googledirections_infowindow_anchor;
		    }
		    else
			{
			    $this->Template->infowindow_anchor = "0,0";
		    }
	    }
	}
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