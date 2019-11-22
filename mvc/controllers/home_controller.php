<?php
    namespace controllers;

    class home_controller
    {
        var $layout;
        var $view;
        var $model;
        var $title;

        function __construct($layout, $view, $model, $title)
        {
            $this->layout = $layout;
            $this->view = $view;
            $this->model = $model;
            $this->title = $title;
        }

        function displayView()
        {
            $view = $this->view;
            include($this->layout);
        }
    }
?>