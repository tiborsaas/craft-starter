<?php

/**
 * Super dotenv 2000 by LaTotty
 */
if ( file_exists("../env.php") )
{
	require_once '../env.php';
} 
else 
{
	exit('<h1>Fatal error: no database environment file found!</h1><p>Please check the readme.md for instructions.<p>');
}

// Path to your craft/ folder
$craftPath = '../craft';

// Do not edit below this line
$path = rtrim($craftPath, '/').'/app/index.php';

if (!is_file($path))
{
	if (function_exists('http_response_code'))
	{
		http_response_code(503);
	}

	exit('Could not find your craft/ folder. Please ensure that <strong><code>$craftPath</code></strong> is set correctly in '.__FILE__);
}

require_once $path;
