<?php

$request = $_SERVER['REQUEST_URI'];

switch($request){

	case '/':
	    require __DIR__.'views/website/home.php';
	    break;

	case '/about':
	    require __DIR__.'views/website/about.php';
	    break;

	case '/services':
	    require __DIR__.'views/website/services.php';
	    break;

	case '/products':
	    require __DIR__.'views/website/products.php';
	    break;

	case '/signup':
	    require __DIR__.'views/users/signup.php';
	    break;

	case '/login':
	    require __DIR__.'views/users/login.php';
	    break;

	case '/profile':
	    require __DIR__.'views/users/profile.php';
	    break;

	case '/post':
	    require __DIR__.'views/posts/createpost.php';
	    break;

	case '/dashboard':
	    require __DIR__.'views/dashboard.php';
	    break;

	case '/onepost':
	    require __DIR__."views/posts/onepost.php";
	    break;

	case '/updatepost':
	    require __DIR__."views/posts/updatepost.php";
	    break;

	case '/deletepost':
	     require __DIR__."views/posts/deletepost.php";
	     break;


	default:
	    http_response_code(404);
	    require __DIR__."views/404.php";
	    

}




?>
