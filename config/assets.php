<?php defined('SYSPATH') OR die('No direct script access.');

return array(
	'default' => array(
		// Where to save compiled css and js files
		'compile' => array(
			'css' => 'assets/css/',
			'js'  => 'assets/js/',
		),
		// Where to get source css and js files
		'source' => array(
			'css' => APPPATH.'media/css/',
			'js'  => APPPATH.'media/js/',
		),
		// LESS default directories to import from
		'less' => array(),
	),
);