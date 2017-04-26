<?php
session_start();
  include_once '../model/db.php';
  include_once '../controller/user.php';



  include '../view/userSearchView.php';

  if (isset($_GET['searchbox'])) {
    show_ppl_by_search();
  }else {
    show_people();
  }
  if ($_SESSION['pri'] == 1) {
    echo "<hr>";
    show_users();
  }
  include '../view/managePeople.php';

  if ($_SESSION['pri'] == 1) {
    include '../view/manageUsers.php';
  }
 ?>
