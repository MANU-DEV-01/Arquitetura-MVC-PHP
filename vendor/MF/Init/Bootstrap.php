<?php
	namespace MF\Init;
abstract class Bootstrap {
	public function __construct(){
		//private $routes;
		$this->initRoutes();
		$this->run($this->getUrl());
	}
 	public  function getRoutes(){
 		return $this->routes;
 	}
 	public function setRoutes(array $routes){
 		$this->routes = $routes;
 	}
 	protected  function run($url){
 		
 		foreach($this->getRoutes()as $key => $route){
 			
 			if($url == $route['route']){
 				$class = "app\\controllers\\".ucfirst($route['controller']);
 				$controller = new $class;
 				$action = $route['action'];
 				$controller->$action();
 			}
 		}

 	}
 	protected function getUrl(){
 		return parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

 	}
}

?>