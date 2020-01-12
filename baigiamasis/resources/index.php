<?php
require_once("config.php");
require_once(LIBRARY_PATH . "/templateFunctions.php");
$variables = array(
	'err' => '403 - Forbidden'
);
renderLayoutWithContentFile("error.php", $variables);
?>