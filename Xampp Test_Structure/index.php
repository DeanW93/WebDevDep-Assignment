<?php
    spl_autoload_register(function($className) {
        $ds = DIRECTORY_SEPARATOR;
        $dir = __DIR__;
        $className = str_replace('\\', $ds, $className);
        $file = "{$dir}{$ds}{$className}.php";
        
        if(is_readable($file)) {
            require_once $file;
        }
    });

    use classes as CoreClass;
    use controllers as controllers;
    use models as models;

    $router = new CoreClass\router();
    $model = new models\home_model();
    $controller = new controllers\home_controller("views/layout.phtml", "views/home.phtml", $model, "home tieeteltelte");
    $controller->displayView();
?>