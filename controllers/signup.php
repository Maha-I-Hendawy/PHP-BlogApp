<?php 

require '../settings.php';

require '../models/UserModel.php';



if($_SERVER['REQUEST_METHOD'] == "POST"){

  	$username = $_POST['username'];
  	$email = $_POST['email'];
  	$password = $_POST['password'];
  	$confirm_password = $_POST['confirm_password'];



  	if($password == $confirm_password){
  		$user = new User($username, $email, $password);
  		
        $sql = "INSERT INTO users (username, email, password) VALUES (?,?,?)";
				$conn->prepare($sql)->execute([$user->username, $user->email, $user->password]);

				$conn = null;
  		header('Location: login.php');
  	}
  	else {

  		echo "Passwords don't match";
  	}



  }
