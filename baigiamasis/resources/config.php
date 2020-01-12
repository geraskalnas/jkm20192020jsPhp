<?php
 
$config = array(
    "db" => array(//duomenu bazes konfiguracija
        "dbname" => "PG4339LA",
        "username" => "PG4339LA",
        "password" => "jkm_PG4339LA",
        "host" => "localhost"
    ),
    "paths" => array(//url adresas iki paveiksleliu
        "resources" => "./",
        "images" => array(
            "content" => $_SERVER["DOCUMENT_ROOT"] . "/images/content",
            "layout" => $_SERVER["DOCUMENT_ROOT"] . "/images/layout"
        )
    )
);
 
defined("LIBRARY_PATH")//apibrezimas vietos kur saugomos pagrindines funkcijos
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));
     
defined("TEMPLATES_PATH")//apibrezimas vietos kur saugomi puslapio sablonai
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));

//Klaidu rodymas
/*
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);
*/
ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
?>