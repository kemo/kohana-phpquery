<?php

function php_query_autoload($class)
{
	$pq_path = Kohana::find_file('vendor','phpQuery');
	
	if ($class === 'phpQuery')
	{
		require_once $pq_path;
		
		return TRUE;
	}
	return FALSE;
}

spl_autoload_register('php_query_autoload');