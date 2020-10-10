<?php

namespace App\Controllers;

class IndexController {

    private $view;

    public function __construct(){
        $this->view = new \stdClass(); //criaremos um obj vazio, para que seus atributo sejam construidos ao longo do processamento da nossa aplicação
    }

    public function index(){

        $this->view->dados = array("sofa","cadeira","cama"); //podemos recuperar essa informação dentro da nossa view
        $this->render('index');
    }
    public function sobreNos(){
        $this->view->dados = array("Maça","Abacate","Mamão"); //podemos recuperar essa informação dentro da nossa view
        $this->render('sobreNos');
    }
    public function render($view){
        //recupera o primeiro nome da class atual
        $classAtual = get_class($this);
        $classAtual = str_replace("App\\Controllers\\",'',$classAtual);
        $classAtual = strtolower(str_replace("Controller","",$classAtual));

        require_once "../App/Views/$classAtual /".$view.".phtml";
    }

}


?>