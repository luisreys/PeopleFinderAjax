<?php

 ?>

               <hr>
               <h2>Update person:</h2>
               <div class="text-left" class="myForm">
                   <div class="form-inline">
                     <div class="form-group">
                       <label for="id">ID: </label>
                       <input type="text" id="id" value="" class="form-control input" required>
                     </div>
                     <div class="form-group">
                       <label for="fname">Name: </label>
                       <input type="text" id="fname" value="" class="form-control input" required>
                     </div>
                     <div class="form-group">
                       <label for="sname">Lastname: </label>
                       <input type="text" id="sname" value="" class="form-control input" required>
                     </div>
                     <input type="hidden" id="edit_form">
                     <button type="button" name="button" class="btn btn-primary" onclick="updatePrsAjax();">Edit</button>
                   </div>
                   <br>
               </div>

               <h2>Add person:</h2>
               <div class="text-left" class="myForm">
                   <form class="form-inline" action="index.php" method="post" >
                     <div class="form-group">
                       <label for="id">ID: </label>
                       <input type="text" name="id" value="" class="form-control input" required>
                     </div>
                     <div class="form-group">
                       <label for="fname">Name: </label>
                       <input type="text" name="fname" value="" class="form-control input" required>
                     </div>
                     <div class="form-group">
                       <label for="sname">Lastname: </label>
                       <input type="text" name="sname" value="" class="form-control input" required>
                     </div>
                     <input type="hidden" name="add_form"  >
                     <input type="submit" class="btn btn-info" name="" value="Add">
                   </form>
                   <br>
               </div>

               <h2>Delete person:</h2>
               <div class="text-left" class="myForm">
                   <form class="form-inline" action="index.php" method="post" >
                     <div class="form-group">
                       <label for="id">ID: </label>
                       <input type="text" name="id" value="" class="form-control input" required>
                     </div>
                     <input type="hidden" name="delete_form"  >
                     <input type="submit" class="btn btn-danger" name="" value="Delete">
                   </form>
                   <br>
               </div>
               <hr>
