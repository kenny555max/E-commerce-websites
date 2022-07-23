<?php

    spl_autoload_register("autoLoader");

    function autoLoader($className) {
        $url = "http://". $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

        if (strpos($url, "controller")) {
            $path = "../classes/";
        }else{
            $path = "classes/";
        }
        $ext = ".class.php";

        require_once $path . $className . $ext;
    };