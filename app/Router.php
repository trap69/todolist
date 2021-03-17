<?php

namespace TaskManager;

class Router{

    private $routes = [];

    public static function load($file){
        $router = new static;
        require $file;

        return $router;
    }

    public function define($routes){
        $this->routes = $routes;
    }

    public function direct($uri){
        $uriPart = explode('/',$uri);
        if (array_key_exists($uri,$this->routes)){ // tikrina ar egzistuoja uri masyve
            return $this->routes[$uri];
        }else{
            if (array_key_exists($uriPart[0], $this->routes)) { //tikrinam ar gezistuoja pirma uri dalis masyve, pvz delete task
                $this->routes[$uri] = $this->routes[$uriPart[0]]; // perrarosm masyvo elemento indeksa su reikiamu id
                unset($this->routes[$uriPart[0]]);
                if (array_key_exists($uri,$this->routes)) { //tikrinam ar masyve yra rout'as su reikiamu indekus
                    return $this->routes[$uri]; // grazinam faila
                }
            }else {
                return $this->routes[404]; // parasom kad nieko neradom.
            }
        }
    }
}