<?php

 ?>

  <hr>
  <h2>Update user:</h2>
  <div class="text-left" class="myForm">
      <div class="">
        <div class="form-group col-md-4">
          <label for="user">User: </label>
          <input type="text" id="userUpdateUser" value="" class="form-control input" required>
        </div>
        <div class="form-group col-md-4">
          <label for="password">Password: </label>
          <input type="password" id="pwdUpdateUser" value="" class="form-control input" required>
        </div>
        <div class="form-group col-md-4">
          <label for="pri">Priority: </label>
          <select class="form-control" id="priUpdateUser" name="pri" required>
            <option selected disabled><b>Choose</b></option>
            <option value="0">Normal User</option>
            <option value="1">Admin</option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="id">ID: </label>
          <input type="number" id="idUpdateUser" value="" class="form-control input" required>
        </div>
        <div class="form-group col-md-4">
          <label for="description">Description: </label>
          <input type="text" id="descriptionUpdateUser" value="" class="form-control input" required>
        </div>
        <input type="hidden" id="edit_form_user" value="edit_form_user">
        <div class="form-group col-md-4">
          <p><br></p>
          <button type="button" name="button" class="btn btn-primary form-control" onclick="updateUserAjax();">Edit</button>
        </div>
      </div>
      <br>
  </div>

  <h2>Add user:</h2>
  <div class="text-left" class="myForm">
      <div class="">
        <div class="form-group col-md-4">
          <label for="user">User: </label>
          <input type="text" id="userAddUser" value="" class="form-control input" required>
        </div>
        <div class="form-group col-md-4">
          <label for="password">Password: </label>
          <input type="password" id="pwdAddUser" value="" class="form-control input" required>
        </div>
        <div class="form-group col-md-4">
          <label for="pri">Priority: </label>
          <select class="form-control" id="priAddUser" name="pri" required>
            <option selected disabled><b>Choose</b></option>
            <option value="0">Normal User</option>
            <option value="1">Admin</option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="id">ID: </label>
          <input type="number" id="idAddUser" value="" class="form-control input" required>
        </div>
        <div class="form-group col-md-4">
          <label for="description">Description: </label>
          <input type="text" id="descriptionAddUser" value="" class="form-control input" required>
        </div>
        <input type="hidden" id="add_form_user" value="add_form_user">
        <div class="form-group col-md-4">
          <p><br></p>
          <button type="button" name="button" class="btn btn-info form-control" onclick="addUserAjax();">Add</button>
        </div>
      </div>
      <br>
  </div>

  <h2>Delete user:</h2>
  <div class="text-left" class="myForm">
      <div class="form-inline">
        <div class="form-group">
          <label for="user">User: </label>
          <input type="text" id="idDeleteUser" value="" class="form-control input" required>
        </div>
        <input type="hidden" id="delete_form_user" value="delete_form_user">
        <button type="button" class="btn btn-danger" name="button" onclick="deleteUserAjax();">Delete</button>
      </div>
      <br>
</div>
