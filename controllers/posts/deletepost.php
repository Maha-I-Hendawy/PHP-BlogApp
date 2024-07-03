<?php 

   session_start();

 
  if (isset($_SESSION['username']) && isset($_SESSION["user_id"])) {
    
    $user_id = $_SESSION['user_id'];
    $username = $_SESSION["username"];
   } else {

    header("Location: ../../views/users/login.php");
}


      require '../../settings.php';

      $url = $_SERVER['REQUEST_URI'];
      $url1 = parse_url($url);
      parse_str($url1['query'], $params);

      $post_id = $params["post_id"];



         $sql = "DELETE FROM posts WHERE post_id=? and user_id=?";
		 $stmt = $conn->prepare($sql);
		 $stmt->execute([$post_id, $user_id]);
         $conn = null;
     header("Location: profile.php");

		



	?>