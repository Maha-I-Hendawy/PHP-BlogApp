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
	<div class="container">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div class="form-group">
    <label for="username">Username:</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>
 
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="password">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

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