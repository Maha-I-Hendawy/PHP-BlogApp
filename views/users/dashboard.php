<?php 
        

        session_start();

        if(isset($_SESSION['username'])){

        	$user = $_SESSION['username'];

        	
        }
        else {

        	header("Location: ../../views/users/login.php");
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
	<title>Dashboard</title>
</head>
<body>
</body>
    <?php require '../includes/_nav_user_in_session.php' ?>
	<?php

	echo "<p>Hello, ". $_SESSION['username'] . "</p>";

      require '../../settings.php';

      $sql = "SELECT username, title FROM users inner join posts on users.user_id = posts.user_id";
		 $stmt = $conn->prepare($sql);
		 $stmt->execute();
         while ($row = $stmt->fetch()) {
         	echo "<div class='container'>";
		    echo "<h2>".$row["title"]."</h2>"."Author: ".$row["username"]."<br />\n";
		    echo "</div>";
		     }

				$conn = null;

		



	?>

</body>
</html>