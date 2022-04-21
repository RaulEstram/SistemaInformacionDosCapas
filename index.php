<?php

    require_once("Config/Config.php");

    $url = !empty($_GET['url'])? $_GET['url'] : 'home/home' ;
    $arrUrl = explode("/", $url);
    // echo $url;
    // echo '<hr>';
    // print_r($arrUrl);
    // echo '<hr>';

    $controller = $arrUrl[0];
    $view = "home";
    
    
    if (!empty($arrUrl[1])) {
        if ($arrUrl[1] != ""){
            $view = $arrUrl[1];
        }
    }

    // echo $controller;
    // echo '<hr>';
    // echo $view;

    require_once("Libraries/Core/Autoload.php");
    require_once("Libraries/Core/Load.php");
?>