<?php

// We need $query here because of the return value in the bootstrap.php file
$query = require 'core/bootstrap.php';

// $router = new Router;
// require 'routes.php';

  $uri = (trim($_SERVER['REQUEST_URI'],'/'));

$router =  Router::load('routes.php');
$router->direct($uri);