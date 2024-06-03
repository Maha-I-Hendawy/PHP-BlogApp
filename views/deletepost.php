<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Delete Post</title>
</head>
<body>

	<?php 

      require '../settings.php';

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


</body>
</html>