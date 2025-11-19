<?php

    /*
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    */
    require "includes/general.php";



    echo Template::header('Biblioteca');
    echo Template::nav();


    echo Template::seccion(Campo::val('seccion'));

    echo Template::footer(); 
    
    
?>