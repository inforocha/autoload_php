<?php

/**
* Autoload para versao do php igual ou superio do 5.3.0
* Usa namespace
*/
function autoload($className) {
	$path = DIR_APP."classes".DIRECTORY_SEPARATOR.str_replace('\\', DIRECTORY_SEPARATOR, $className).'.php';
	
	if(file_exists($path) && !is_dir($className) && !class_exists($className)) {
		require $path;
	}
}

spl_autoload_register('autoload');