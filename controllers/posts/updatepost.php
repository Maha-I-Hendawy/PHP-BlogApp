<?php

 session_start();

 
  if (isset($_SESSION['username'])) {
    
    $user_id = $_SESSION['user_id'];
    $username = $_SESSION["username"];
} else {

    header("Location: ../../views/users/login.php");
}


require '../../settings.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){


      $url = $_SERVER['REQUEST_URI'];
      $url1 = parse_url($url);
      parse_str($url1['query'], $params);

      $post_id = $params["post_id"];


	  $title = $_POST["title"];
	  $content = $_POST["content"];

   	$sql = "UPDATE posts SET title=?, content=? WHERE post_id =? and user_id=?";
		$conn->prepare($sql)->execute([$title, $content, $post_id, $user_id]);

		$conn = null;
  	header('Location: profile.php');
}

?>