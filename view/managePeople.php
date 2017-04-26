<?php

 ?>
   <hr>
   <h2>Update person:</h2>
   <div class="text-left" class="myForm">
       <div class="form-inline">
         <div class="form-group">
           <label for="idUpdate">ID: </label>
           <input type="text" id="id" value="" class="form-control input" required>
         </div>
         <div class="form-group">
           <label for="fnameUpdate">Name: </label>
           <input type="text" id="fname" value="" class="form-control input" required>
         </div>
         <div class="form-group">
           <label for="snameUpdate">Lastname: </label>
           <input type="text" id="sname" value="" class="form-control input" required>
         </div>
         <input type="hidden" id="edit_form">
         <button type="button" name="button" class="btn btn-primary" onclick="updatePrsAjax();">Edit</button>
       </div>
       <br>
   </div>

   <h2>Add person:</h2>
   <div class="text-left" class="myForm">
       <div class="form-inline">
         <div class="form-group">
           <label for="id">ID: </label>
           <input type="text" id="idAdd" value="" class="form-control input" required>
         </div>
         <div class="form-group">
           <label for="fname">Name: </label>
           <input type="text" id="fnameAdd" value="" class="form-control input" required>
         </div>
         <div class="form-group">
           <label for="sname">Lastname: </label>
           <input type="text" id="snameAdd" value="" class="form-control input" required>
         </div>
         <input type="hidden" id="add_form" value="add_form" >
         <button type="button" name="button" class="btn btn-info" onclick="addPrsAjax();">Add</button>
       </div>
       <br>
   </div>

   <h2>Delete person:</h2>
   <div class="text-left" class="myForm">
       <div class="form-inline">
         <div class="form-group">
           <label for="id">ID: </label>
           <input type="text" id="idDelete" value="" class="form-control input" required>
         </div>
         <input type="hidden" id="delete_form" value="delete_form">
         <button type="button" name="button" class="btn btn-danger" onclick="deletePrsAjax();">Delete</button>
       </div>
       <br>
   </div>
   <hr>
