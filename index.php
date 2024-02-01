<?php
    include_once('env.php');
    include_once('src/controller/Router.php');
    include_once('routes.php');

    if (!session_start()) {
        session_start();
    }

    $Router = new Router();
    $Router->run($routesView);
?>