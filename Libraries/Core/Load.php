<?php
    $controllerFile = "Controllers/".$controller.".php";
    if(file_exists($controllerFile)){
        require_once($controllerFile);
        $controller = new $controller();
        if(method_exists($controller, $view)){
            $controller->{$view}();
        }else {
            require_once("Controllers/Error.php");
        }
    } else {
        require_once("Controllers/Error.php");
    }
?>  