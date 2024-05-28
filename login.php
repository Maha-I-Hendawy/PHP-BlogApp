<?php require 'settings.php' ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
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
    header("Location: profile.php");

  }


}
		
  


?>