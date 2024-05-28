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

  	if($username == 'Kiki' && $password == '123'){

  		echo 'Welcome '.$username;
  		header('Location: profile.php');
  	}
  	else {

  		echo 'Check Email and Password';
  	}
  }


?>