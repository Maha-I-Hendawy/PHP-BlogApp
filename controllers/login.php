<?php require '../settings.php';

   session_start();

   if($_SERVER['REQUEST_METHOD'] == "POST"){

  	$username = $_POST['username'];
  	$password = $_POST['password'];



  	$stmt = $conn->prepare("SELECT * FROM users WHERE username=? && password=?");
		$stmt->execute([$username, $password]); 
   while ($row = $stmt->fetch()) {
    echo "Hello, ".$row["username"]." ".$row["user_id"]."<br />\n";
    $_SESSION['user_id'] = $row["user_id"];
    $_SESSION['username'] = $row["username"];
    header("Location: profile.php");


  }


}



 ?>
