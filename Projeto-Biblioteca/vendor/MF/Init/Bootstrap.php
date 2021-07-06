<?php

namespace MF\Init;

abstract class Bootstrap{

    private $route;

    abstract protected function initRoutes();

    public function __construct(){
        $this->initRoutes();
        $this->run($this->getURL());
    }
    public function getRoutes(){
        return $this->route;
    }
    public function setRoutes(array $routes){
        $this->route = $routes;
    }

    protected function run($url){
      
        foreach($this->getRoutes() as $key => $routes){
            if($url == $routes['route']){
                $class = "App\\Controllers\\".ucfirst($routes['controller']);
                $controller = new $class;
                $action = $routes['action'];
                $controller->$action();
            }
        }

    }

    protected function getURL(){
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}

?>