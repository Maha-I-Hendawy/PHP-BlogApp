<?php 

  session_start();

 
  if (isset($_SESSION['username']) && $_SESSION['loggedin'] == true) {
    session_unset();
    session_destroy();
    header("Location: login.php");
} else {
    echo "Please login";
}


?>