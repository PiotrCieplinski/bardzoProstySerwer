<?php
 
// get the HTTP method, path and body of the request
$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
 
switch ($method) {
  case 'GET':
	echo "ściągamy ";
	foreach($_GET as $key=>$val) {
		print_r($key." = ".$val.", ");
	}exit;
  case 'PUT':
    parse_str(file_get_contents("php://input"),$post_vars);
	echo "aktualizujemy: ";
	foreach($post_vars as $key=>$val) {
		print_r($key." = ".$val.", ");
	}exit;
  case 'POST':
	echo "dodajemy ";
	foreach($_POST as $key=>$val) {
		print_r($key." = ".$val.", ");
	}exit;
  case 'DELETE':
    parse_str(file_get_contents("php://input"),$post_vars);
	echo "usuwamy: ";
	foreach($post_vars as $key=>$val) {
		print_r($key." = ".$val.", ");
	}exit;
	default:
		echo $method.": ";
		foreach($post_vars as $key=>$val) {
			print_r($key." = ".$val.", ");
		}exit;
}
