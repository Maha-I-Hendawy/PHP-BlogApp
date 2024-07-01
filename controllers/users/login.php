<?php require '../settings.php';

   session_start();

   if($_SERVER['REQUEST_METHOD'] == "POST"){

  	$username = $_POST['username'];
  	$password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username= :username";

  	$stmt = $conn->prepare($sql);

		$stmt->bindValue(':username', $username); 
    $stmt->execute();

    if($stmt->rowCount() > 0){

      $check = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
      $row_username = $check[0]['username'];
      $row_password = $check[0]["password"];
      //echo $row_username;
      //echo $row_password;

      if(password_verify($password, $row_password)){

           $_SESSION['username'] = $row_username;
           header("Location: dashboard.php");

            }
      else {

        echo "invalid password";
      }
   

   
    


  }

}





 
