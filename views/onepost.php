<?php 

  session_start();

 
  if (isset($_SESSION['username'])) {
    
    $user_id = $_SESSION['user_id'];
    $username = $_SESSION["username"];
} else {

    header("Location: views/login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Get Post</title>
</head>
<body>

    <?php require 'includes/_nav.php' ?>
	<?php 

      require '../settings.php';

      $url = $_SERVER['REQUEST_URI'];
      $url1 = parse_url($url);
      parse_str($url1['query'], $params);

      $post_id = $params["post_id"];



      $sql = "SELECT title, content FROM posts WHERE post_id=? and user_id=?";
		 $stmt = $conn->prepare($sql);
		 $stmt->execute([$post_id, $user_id]);
         while ($row = $stmt->fetch()) {
         	echo "<div class='container'>";
		    echo "<h2>".$row["title"]."</h2>".$row["content"]."<br />\n";
		    echo "</div>";
		     }

				$conn = null;

		



	?>

</body>
</html>