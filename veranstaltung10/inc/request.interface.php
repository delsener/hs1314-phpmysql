<?php 

interface Request {

	public function getController();
	public function getMethod();
	public function getParam($name);

}


?>