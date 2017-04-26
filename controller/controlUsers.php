<?php
include_once "../model/db.php";
include_once '../controller/user.php';
session_start();

if ($_SESSION["pri"] == 0) {
    //normal user
  $me = new user($_SESSION['username'], $_SESSION["pri"], $_SESSION["id"], $_SESSION["description"]);
}else {
    //admin
  $me = new admin($_SESSION['username'], $_SESSION["pri"], $_SESSION["id"], $_SESSION["description"]);
}

if (isset($_GET['edit_form_user'])) {
  updateUser();
}
if (isset($_GET['add_form_user'])) {
  addUser();
}
if (isset($_GET['delete_form_user'])) {
  deleteUser();
}

function updateUser(){

  $user = $_GET['userUpdateUser'];
  $pwd = $_GET['pwdUpdateUser'];
  $pri = $_GET['priUpdateUser'];
  $id = $_GET['idUpdateUser'];
  $description = $_GET['descriptionUpdateUser'];
  global $me;

  $ret = $me->updateUser($user, $pwd, $pri, $id, $description);
  if ($ret!=0) {  //Remember to check errors here.
    echo "Something was wrong! <br>";
    echo "Error $ret: ";
    switch ($ret) {
      case -1:
        echo "ID doesn't exist in DB. <br>";
        break;
      case -2:
        echo "Error executing the statement. <br>";
        break;
      case -3:
        echo "Error preparing the SQL. <br>";
        break;
      case -3:
        echo "Internal error with DB. <br>";
        break;
      default:
        # code...
        break;
    }
        echo '<a onclick="loadUserScreen();">Go Back</a>';
    exit;
  }else {
    return 0;
  }
}

function addUser(){
  $user = $_GET['userUpdateUser'];
  $pwd = $_GET['pwdUpdateUser'];
  $pri = $_GET['priUpdateUser'];
  $id = $_GET['idUpdateUser'];
  $description = $_GET['descriptionUpdateUser'];

  global $me;

  $ret = $me->addUser($user, $pwd, $pri, $id, $description);
  if ($ret!=0) {  //Remember to check errors here.
    echo "Something was wrong! <br>";
    echo "Error $ret: ";
    switch ($ret) {
      case -1:
        echo "ID doesn't exist in DB. <br>";
        break;
      case -2:
        echo "Error executing the statement. <br>";
        break;
      case -3:
        echo "Error preparing the SQL. <br>";
        break;
      case -3:
        echo "Internal error with DB. <br>";
        break;
      default:
        # code...
        break;
    }
        echo '<a onclick="loadUserScreen();">Go Back</a>';
    exit;
  }else {
    return 0;
  }
}

function deleteUser(){
  $id = $_GET['id'];

  global $me;

  $ret = $me->deleteUser($id);
  if ($ret!=0) {  //Remember to check errors here.
    echo "Something was wrong! <br>";
    echo "Error $ret: ";
    switch ($ret) {
      case -1:
        echo "ID doesn't exist in DB. <br>";
        break;
      case -2:
        echo "Error executing the statement. <br>";
        break;
      case -3:
        echo "Error preparing the SQL. <br>";
        break;
      case -3:
        echo "Internal error with DB. <br>";
        break;
      default:
        # code...
        break;
    }
        echo '<a onclick="loadUserScreen();">Go Back</a>';
    exit;
  }else {
    return 0;
  }
}


 ?>
