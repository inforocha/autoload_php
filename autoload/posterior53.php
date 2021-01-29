<?php
// guarda true ou false para saber se a versao do php eh menor que a 5.3.0
if (version_compare(phpversion(), '5.3.0', '<')) {
	exit("Sua versão do php é menor que 5.3.0");
}

define('DIR_APP', __DIR__.DIRECTORY_SEPARATOR);

// as versoes mais recentes utilizam namespace. 
use actions/Action;
use models/Model;
use avulsas/Avulsa;

require DIR_APP."autoload.php";

$Action = new Action();
$Model = new Model();
$Avulsa = new Avulsa();
