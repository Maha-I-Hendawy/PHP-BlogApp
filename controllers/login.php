<?php require '../settings.php';

   session_start();

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
