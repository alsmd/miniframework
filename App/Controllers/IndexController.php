<?php

namespace App\Controllers;

use MF\Controller\Action;

class IndexController extends Action{

    public function index(){

        $this->view->dados = array("sofa","cadeira","cama"); //podemos recuperar essa informação dentro da nossa view
        $this->render('index','layout1');
    }
    public function sobreNos(){
        $this->view->dados = array("Maça","Abacate","Mamão"); //podemos recuperar essa informação dentro da nossa view
        $this->render('sobreNos','layout1');
    }
    

}


?>