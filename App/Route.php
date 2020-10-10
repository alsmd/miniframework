<?php 

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {
    //Qual o controller e a sua respectiva ação que sera tomada para cada path
    protected function initRoutes(){

        $routes['home'] = array(
            'route' => '/',
            'controller' => 'IndexController',
            'action' => 'index'
        );

        $routes['sobre_nos']= array(
            'route' => '/sobre_nos',
            'controller' => 'IndexController',
            'action' => 'sobreNos'
        );
        parent::setRoutes($routes);
    }
}

?>