<?php

header('Access-Control-Allow-Origin: http://localhost:3000');

require "router.php";

$url = $_SERVER["REQUEST_URI"];

if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $url )) {
    return false; 
} else {
	$router = new Router();
	$router->route($url);
}