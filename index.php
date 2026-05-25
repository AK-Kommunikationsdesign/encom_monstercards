<?php

pwConfig::register('sitemonstercards', __DIR__ . '/src/config');

Kirby::plugin('custom/site-monstercards', [

	/* -------------- Extensions --------------*/
	'blueprints' => require_once 'src/extensions/blueprints.php',
	'snippets' => require_once 'src/extensions/snippets.php',
	'translations' => require_once 'src/extensions/translations.php'
]);
