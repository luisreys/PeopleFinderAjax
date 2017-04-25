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

if (isset($_GET['edit_form'])) {
  updatePerson();
}


function updatePerson(){
  $id = $_GET['id'];
  $fname = $_GET['fname'];
  $sname = $_GET['sname'];
  $edit_form = $_GET['edit_form'];
  global $me;

  $ret = $me->updatePerson($id, $fname, $sname);
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
        echo "Something bad happend";
        break;
    }
    echo '<a onclick="loadUserScreen();">Go Back</a>';
    exit;
  }else {
    return 0;
  }
}
?>
