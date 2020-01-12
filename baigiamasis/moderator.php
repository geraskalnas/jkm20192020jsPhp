<?php
    require_once("resources/config.php");
	require_once('resources/db.php');
    require_once(LIBRARY_PATH . "/templateFunctions.php");
	
	$busena=isset($_GET['object'])?$_GET['object']:'home';
	
	$variables = array(
        'veiksmai' => array(
			"Nieko" => "https://google.com"
		)
    );
	
	switch($busena){
		case 'home':
		break;
		case 'readers':
		break;
		case 'books':
		break;
		case 'issue':
		break;
	}
    
	renderLayoutWithContentFile("$busena.php", $variables);
    
?>