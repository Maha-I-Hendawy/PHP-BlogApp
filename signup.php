<?php require 'settings.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

		<label>Username:</label>
		<input type="text" name="username">
		<br>
		<label>Email:</label>
		<input type="email" name="email">
		<br>
		<label>Password:</label>
		<input type="password" name="password">
		<br>
		<label>Confirm Password</label>
		<input type="password" name="confirm_password">
		<br>
		<input type="submit" value="Sign Up">
	</form>

</body>
</html>

<?php

  if($_SERVER['REQUEST_METHOD'] == "POST"){

  	$username = $_POST['username'];
  	$email = $_POST['email'];
  	$password = $_POST['password'];
  	$confirm_password = $_POST['confirm_password'];

  	if($password == $confirm_password){
        $sql = "INSERT INTO users (username, email, password) VALUES (?,?,?)";
				$conn->prepare($sql)->execute([$username, $email, $password]);

				$conn = null;
  		header('Location: login.php');
  	}
  	else {

  		echo "Passwords don't match";
  	}



  }


?>