<?php
namespace app\controllers;
//recursos do miniframework
use MF\controller\Action;
use MF\model\Container;
//os models
use app\models\Produto;
use app\models\Info;


class IndexController extends Action{

	
	public function index(){
		
		$produto = Container::getModel('Produto');
		$produtos = $produto->getProdutos();

		$this->view->dados = $produtos;

		$this->render('index', 'layout1');
	}
	public function sobreNos(){
		
		$info = Container::getModel('info');
		$informacoes = $info->getInfo();

		$this->view->dados = $informacoes;

		

		$this->render('sobreNos', 'layout1');
	
	}
	
}

?>