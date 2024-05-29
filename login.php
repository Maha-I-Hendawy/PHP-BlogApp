<?php require 'settings.php' ?>

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
	<title></title>
</head>
<body>
	<?php require 'includes/_nav.php' ?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

		<label>Username:</label>
		<input type="text" name="username">
		<br>
		
		<label>Password:</label>
		<input type="password" name="password">
		<br>
		
		<input type="submit" value="Login">
	</form>

</body>
</html>


<?php

  if($_SERVER['REQUEST_METHOD'] == "POST"){

  	$username = $_POST['username'];
  	$password = $_POST['password'];



  	$stmt = $conn->prepare("SELECT username, password FROM users WHERE username=? && password=?");
		$stmt->execute([$username, $password]); 
    while ($row = $stmt->fetch()) {
    echo "Hello, ".$row['username']."<br />\n";
    $_SESSION['username'] = $username;
    header("Location: profile.php");

  }


}
		
  


?>