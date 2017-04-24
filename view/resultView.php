<?php
include_once "../model/db.php";

$searchbox = $_GET['searchbox'];
 ?>
  <div class="result-table">
    <?php show_ppl_by_search(); ?>
  </div>
  <hr>
  <div class="text-center">
    <h1 id="main-title">GLOOGE</h1>
  </div>
   <div class="text-center" id="myForm">
       <div class="form-inline">  <!-- result.php -->
         <div class="form-group">
           <input type="text" name="searchbox" value="" class="form-control input" id="searchbox">
         </div>

         <button type="button" name="button" onclick="sendSearch();" class="btn btn-default">Search</button>
       </div>
   </div>
