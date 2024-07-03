<?php 

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

  	$sender = $_POST['sender'];

  	$email = $_POST['email'];

  	$message = $_POST['msg'];

  	header("Location: ../views/website/home.php");



  }







?>