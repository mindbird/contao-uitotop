<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Uitotop
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array(
    'UiToTop'
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array(
    
    // Classes
    'UiToTop\UiToTop' => 'system/modules/uitotop/classes/UiToTop.php'
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array(
    'mod_uitotop' => 'system/modules/uitotop/templates'
));