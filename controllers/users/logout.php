<?php 

  session_start();

 
  if (isset($_SESSION['username'])) {
    
    session_destroy();
    header('Location: ../../views/login.php');
} else {
    echo "Please Login";
}


?>