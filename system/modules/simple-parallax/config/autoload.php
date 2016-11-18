<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Parallax',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'Parallax\ContentParallax' => 'system/modules/simple-parallax/elements/ContentParallax.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'block_searchable'     => 'system/modules/simple-parallax/templates',
	'mod_article_parallax' => 'system/modules/simple-parallax/templates',
));
