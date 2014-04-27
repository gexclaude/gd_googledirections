<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Gd_googledirections
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'ModuleGD_GoogleDirections'     => 'system/modules/gd_googledirections/modules/ModuleGD_GoogleDirections.php',
	'tl_module_gd_googledirections' => 'system/modules/gd_googledirections/modules/tl_module_gd_googledirections.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'mod_gd_googledirections'            => 'system/modules/gd_googledirections/templates',
    'mod_gd_googledirections_one_column' => 'system/modules/gd_googledirections/templates',
    'gd.control'                         => 'system/modules/gd_googledirections/templates',
    'gd.script'                          => 'system/modules/gd_googledirections/templates',
));
