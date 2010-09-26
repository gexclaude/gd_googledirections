-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************

-- 
-- Table `tl_modules`
-- 

CREATE TABLE `tl_module` (
  `gd_googledirections_from` varchar(255) NOT NULL default '',
  `gd_googledirections_from_coords` varchar(64) NOT NULL default '',
  `gd_googledirections_from_readonly` char(1) NOT NULL default '',
  `gd_googledirections_from_label` varchar(255) NOT NULL default '',
  `gd_googledirections_via` varchar(255) NOT NULL default '',
  `gd_googledirections_via_coords` varchar(64) NOT NULL default '',
  `gd_googledirections_via_readonly` char(1) NOT NULL default '',
  `gd_googledirections_via_label` varchar(255) NOT NULL default '',
  `gd_googledirections_via_add` char(1) NOT NULL default '',
  `gd_googledirections_to` varchar(255) NOT NULL default '',
  `gd_googledirections_to_coords` varchar(64) NOT NULL default '',
  `gd_googledirections_to_readonly` char(1) NOT NULL default '',
  `gd_googledirections_to_label` varchar(255) NOT NULL default '',
  `gd_googledirections_submit_label` varchar(255) NOT NULL default '',
  `gd_googledirections_template` varchar(64) NOT NULL default ''
  `gd_googledirections_width` varchar(64) NOT NULL default '',
  `gd_googledirections_height` varchar(64) NOT NULL default '',
  `gd_googledirections_marker` char(1) NOT NULL default '',
  `gd_googledirections_marker_coords` varchar(64) NOT NULL default '',
  `gd_googledirections_marker_icon` varchar(255) NOT NULL default '',
  `gd_googledirections_marker_shadow` varchar(255) NOT NULL default '',
  `gd_googledirections_marker_anchor` varchar(64) NOT NULL default '',
  `gd_googledirections_infowindow_text` text NULL,
  `gd_googledirections_infowindow_anchor` varchar(64) NOT NULL default '',
  `gd_googledirections_infowindow_auto` char(1) NOT NULL default '',
  `gd_googledirections_list_width` varchar(64) NOT NULL default '',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- 
-- Table `tl_page`
-- 

CREATE TABLE `tl_page` (
  `gd_googlemaps_id` varchar(255) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;