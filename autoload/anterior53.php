<?php
if (version_compare(phpversion(), '5.3.0', '>=')) {
	exit("Sua versão do php é maior que 5.3.0");
}

define('DIR_APP', dirname(__FILE__).DIRECTORY_SEPARATOR);

require DIR_APP."autoload_anterior53.php";

$Action = new ActionSemNamespace();
$Model = new ModelSemNamespace();
$Avulsa = new AvulsaSemNamespace();