<?php defined('SYSPATH') OR die('No direct script access.');

// Autoloader for assets libraries
function assets_autoload($class)
{
	if ($class == 'lessc')
	{
		require_once Kohana::find_file('vendor', 'lessphp'.DIRECTORY_SEPARATOR.'lessc.inc');
	}
	elseif ($class == 'JSMin')
	{
		require_once Kohana::find_file('vendor', 'jsmin'.DIRECTORY_SEPARATOR.'jsmin');
	}
	elseif ($class == 'CssMin')
	{
		require_once Kohana::find_file('vendor', 'cssmin'.DIRECTORY_SEPARATOR.'cssmin');
	}
}

spl_autoload_register('assets_autoload');