<?php

 session_start();

 
  if (isset($_SESSION['username'])) {
    
    $user_id = $_SESSION['user_id'];
    $username = $_SESSION["username"];
} else {

    header("Location: ../views/login.php");
}


require '../settings.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$title = $_POST["title"];
	$content = $_POST["content"];

	$sql = "INSERT INTO posts (title, content, user_id) VALUES (?,?,?)";
				$conn->prepare($sql)->execute([$title, $content, $user_id]);

				$conn = null;
  		header('Location: profile.php');
}






?>