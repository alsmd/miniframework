<?php 

    namespace MF\Controller;

    abstract class Action{

        protected $view;

        public function __construct(){
            $this->view = new \stdClass(); //criaremos um obj vazio, para que seus atributo sejam construidos ao longo do processamento da nossa aplicação
        }

        protected function render($view){
            //recupera o primeiro nome da class atual
            $classAtual = get_class($this);
            $classAtual = str_replace("App\\Controllers\\",'',$classAtual);
            $classAtual = strtolower(str_replace("Controller","",$classAtual));
    
            require_once "../App/Views/$classAtual /".$view.".phtml";
        }
    }

?>