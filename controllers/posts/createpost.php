<?php

 session_start();

 
  if (isset($_SESSION['username']) && isset($_SESSION["user_id"])) {
    
    $user_id = $_SESSION['user_id'];
    $username = $_SESSION["username"];
} else {

    header("Location: ../../views/users/login.php");
}


require '../../settings.php';
require '../../models/PostModel.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$title = $_POST["title"];
	$content = $_POST["content"];

	$post = new Post($title, $content, $user_id);

	$sql = "INSERT INTO posts (title, content, user_id) VALUES (?,?,?)";
				$conn->prepare($sql)->execute([$post->title, $post->content, $post->author]);

				$conn = null;
  		header('Location: createpost.php');
}






?>