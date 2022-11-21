<?php
namespace user;

require "model.php";

class Controller {
	public function do(){
		$model = new \autorization\Model();
		$json = file_get_contents('php://input');
		$data = json_decode($json, true);
		$login = isset($data['login']);
		$password = isset($data['password']);
		
		echo 1;
		if($login && $password){
			echo 2;
			$model->check($data['login'], $data['password']);
		}else { 
			echo 'where data ?';
		}
	}
}