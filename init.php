<?php

function php_query_autoload($class)
{
	if ($class === 'phpQuery')
	{
		require_once Kohana::find_file('vendor','phpQuery');;
		
		return TRUE;
	}
	
	return FALSE;
}

spl_autoload_register('php_query_autoload');