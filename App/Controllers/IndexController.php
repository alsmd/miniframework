<?php

namespace App\Controllers;

use MF\Controller\Action;
use App\Connection;
use App\Models\Produto;

class IndexController extends Action{

    public function index(){
        //instancia de conexão
        $conn = Connection::getDb(); 
        //instanciar modelo
        $produto = new Produto($conn);
        //recupera todos os produtos do BD
        $produtos = $produto->getProdutos();
        //deixa esses dados acessivel para a view carregada
        $this->view->dados = $produtos;
        //carrega a view correspondente ao action em questão 
        $this->render('index','layout1');
    }
    public function sobreNos(){
        $this->render('sobreNos','layout1');
    }
    

}


?>