<?php
if (version_compare(phpversion(), '5.3.0', '>=')) {
	exit("Sua versão do php é maior que 5.3.0");
}
define('DIR_APP', dirname(__FILE__).DIRECTORY_SEPARATOR);

echo "
<h3>Arquivo não utiliza autoload</h3>
<p>Por isso existe a necessidade dos requires ou includes para utilizar os arquivos</p>
";

require DIR_APP."classes".DIRECTORY_SEPARATOR."actions".DIRECTORY_SEPARATOR."ActionSemNamespace.php";
require DIR_APP."classes".DIRECTORY_SEPARATOR."models".DIRECTORY_SEPARATOR."ModelSemNamespace.php";
require DIR_APP."classes".DIRECTORY_SEPARATOR."AvulsaSemNamespace.php";

$Action = new ActionSemNamespace();
$Model = new ModelSemNamespace();
$Avulsa = new AvulsaSemNamespace();