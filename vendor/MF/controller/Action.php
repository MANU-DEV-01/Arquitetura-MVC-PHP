<?php
namespace MF\controller;

	abstract class Action{
		protected $view;

		public function __construct(){
			$this->view = new \stdClass();
	}

		protected function render($view){
			$this->view->page = $view;
			require_once "../app/views/layout1.phtml";
	}
		
 	protected function content(){
 		$classAtual = get_class($this);
		$classAtual = str_replace('app\\controllers\\', '', $classAtual);
		$classAtual = strtolower(str_replace('Controller', '', $classAtual));

	
		require_once "../app/views/".$classAtual."/".$this->view->page.".phtml";
	 }
  
}
?>