<?php

namespace App\Controllers;

//Recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action{

    public function index(){
        $produto = Container::getModel("Produto");
        $produtos = $produto->getProdutos();
        //deixa esses dados acessivel para a view carregada
        $this->view->dados = $produtos;
        //carrega a view correspondente ao action em questão 
        $this->render('index','layout1');
    }
    public function sobreNos(){
        $info = Container::getModel("Info");
        $Informacoes = $info->getInfo();

        $this->view->dados = $Informacoes;

        $this->render('sobreNos','layout1');
    }
    

}


?>