<?php 

namespace App;

class Route{

    private $routes;

    //
    public function __construct(){
        $this->initRoutes();
        $this->run($this->getUrl());
    }
    //recupera e seta as possiveis rotas
    public function getRoutes(){
        return $this->routes;
    }

    public function setRoutes(array $routes){
        $this->routes = $routes;
    }

    //Qual o controller e a sua respectiva ação que sera tomada para cada path
    public function initRoutes(){

        $routes['home'] = array(
            'route' => '/',
            'controller' => 'IndexController',
            'action' => 'index'
        );

        $routes['sobre_nos']= array(
            'route' => '/sobre_nos',
            'controller' => 'IndexController',
            'action' => 'sobre_nos'
        );
        $this->setRoutes($routes);
    }

    public function run($url){
        foreach($this->getRoutes() as $key => $route){
            if($url == $route['route']){
                $class = "App\\Controllers\\".ucfirst($route["controller"]);

                $controller = new $class;

                $action = $route['action'];

                $controller->$action();
            }
        }
    }

    //pega o path acessado pelo usuario
    public function getUrl(){
        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    }
}

?>