<?php

include( ROOT . '/inc/request.interface.php' );



class Request_http implements request{

	private function getAllParameters(){
		return explode('/' , $_GET['vars'] );
	}

	public function getController(){
		$params = self::getAllParameters();
		return $params[0];
	}
	

	public function getMethod(){
		$params = self::getAllParameters();
		return $params[1];
	}

	
	public function getParam($paramName){
		return $_GET[$paramName];
	}
	
} 

 ?>