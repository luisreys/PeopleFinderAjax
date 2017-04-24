<?php
include_once "../model/db.php";
  $username = $_POST['user'];
  $password = $_POST['pass'];

  /*
  * -1: No rows
  * -2: Fail preparing the stmt
  */
  $loginReturn = loginDB($username, $password);
  switch ($loginReturn) {
    case -1:
      echo 'Username or password is wrong. <a href="../view/login.php">Try again.</a>';
      break;
    case -2:
      echo "Something was wrong! Error code -2.";
      break;
    default:
      //echo "Login successfully! Welcome " . $username;
      
      session_start();
      $_SESSION["username"] = $username;
      $_SESSION["pri"] = $loginReturn["pri"];
      $_SESSION["id"] = $loginReturn["id"];
      $_SESSION["description"] = $loginReturn["description"];
      return 0;
      break;
  }

  header("Location: ../index.php"); //Revisar
 ?>
