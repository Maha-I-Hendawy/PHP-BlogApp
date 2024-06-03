<?php

$request = $_SERVER['REQUEST_URI'];

switch($request){

	case '/':
	    require __DIR__.'views/home.php';
	    break;

	case '/about':
	    require __DIR__.'views/about.php';
	    break;

	case '/services':
	    require __DIR__.'views/services.php';
	    break;

	case '/products':
	    require __DIR__.'views/products.php';
	    break;

	case '/signup':
	    require __DIR__.'views/signup.php';
	    break;

	case '/login':
	    require __DIR__.'views/login.php';
	    break;

	case '/profile':
	    require __DIR__.'views/profile.php';
	    break;

	case '/post':
	    require __DIR__.'views/createpost.php';
	    break;

	case '/dashboard':
	    require __DIR__.'views/dashboard.php';
	    break;

	case '/onepost':
	    require __DIR__."views/onepost.php";
	    break;

	case '/updatepost':
	    require __DIR__."views/updatepost.php";
	    break;

	case '/deletepost':
	     require __DIR__."views/deletepost.php"


	default:
	    http_response_code(404);
	    require __DIR__.$app.'views/404.php';
	    

}




?>
