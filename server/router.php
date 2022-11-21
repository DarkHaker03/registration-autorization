<?php

// require "./registration/controller.php";
// require "./autorization/controller.php";
require "./user/controller.php";

class Router{
	// private $currentPage = '';

	// function addRoute($url,$path){
	// 	$this->pages[$url] = $path;
	// }
	
	function route($url){

		// $registration = new registration\Controller();
		// $autorization = new autorization\Controller();
		$user = new user\Controller();


			switch ($url) {
				case '/user':
					$user->do();
					break;
				default:
					echo '404';
					die();
					break;
			}
			
	}
}

