<?php


/**
* Autoload para versoes do php abaixo do 5.3.0
* Nao usa namespace
*
* Aqui estamos utilizando apenas dois niveis de diretorios para ficar mais simples
*/
function __autoload($className) {
	$classmap = array('classes' => array('actions','models'));

	foreach ($classmap as $directory => $subdirectories) {
		$path = DIR_APP.$directory.DIRECTORY_SEPARATOR.$className.'.php';
		if(file_exists($path) && !is_dir($className) && !class_exists($className)) {
			require $path;
		}
		if (count($subdirectories)) {
			foreach ($subdirectories as $subdirectory) {
				$path = DIR_APP.$directory.DIRECTORY_SEPARATOR.$subdirectory.DIRECTORY_SEPARATOR.$className.'.php';
				if(file_exists($path) && !is_dir($className) && !class_exists($className)) {
					require $path;
				}
			}
		}
	}
}
