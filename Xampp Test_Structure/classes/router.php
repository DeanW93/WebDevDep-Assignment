<?php
    namespace classes;

    class router
    {
        var $class;
        var $method;
        var $methodArgs;

        function __construct()
        {
            $url = explode("/", $_SERVER['REQUEST_URI']);
            array_shift($url);
            $this->class = array_shift($url);
            $this->method = array_shift($url);
            $this->methodArgs = $url;
        }
    }

?>