<?php

class Router
{
    public $routes = [
        'GET' => [],
        'POST' => []
    ];
    
    public static function load($file) 
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function get($uri, $controller) 
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller) 
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
      //  var_dump($this->routes['contact']); exit();
        if ( array_key_exists($uri, $this->routes[$requestType] )) {
           
            return trim($this->routes[$requestType][$uri], '/');
       }

       throw new Exception('No route defined for this URI: ' . $uri);
    }
}