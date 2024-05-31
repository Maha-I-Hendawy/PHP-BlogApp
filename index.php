<?php

$request = $_SERVER['REQUEST_URI'];
$app = '/blog/';

switch($request){

	case '/':
	   require __DIR__.$app.'views/home.php';
	   break;

	case '/about':
	    require __DIR__.$app.'views/about.php';
	    break;

	case '/services':
	    require __DIR__.$app.'views/services.php';
	    break;

	case '/products':
	    require __DIR__.$app.'views/products.php';
	    break;


	default:
	    require __DIR__.$app.'views/404.php';
	    

}




?>
