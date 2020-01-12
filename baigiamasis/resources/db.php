<?php
require_once("config.php");
@$conn = new mysqli($config['db']['host'], $config['db']['username'], $config['db']['password'], $config['db']['dbname']);
if ($conn->connect_error) {
	require_once(LIBRARY_PATH . "/templateFunctions.php");
	$variables = array(
		'err' => 'Nepavyksta prisijungti prie duomenų bazės'//: ' . $conn->connect_error
	);
	renderLayoutWithContentFile('error.php', $variables);
}

?>