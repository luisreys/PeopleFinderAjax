<?php
  include_once '../model/db.php';
  include_once '../controller/user.php';

  

  include '../view/userSearchView.php';

  if (isset($_GET['searchbox'])) {
    show_ppl_by_search();
  }else {
    show_people();
  }
  include '../view/managePeople.php';
 ?>
