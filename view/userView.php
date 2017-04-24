<?php
  include_once '../model/db.php';

  include '../view/searchView.php';

  if (isset($_GET['searchbox'])) {
    show_ppl_by_search();
  }else {
    show_people();
  }
  include '../view/managePeople.php';
  echo "success";
 ?>
