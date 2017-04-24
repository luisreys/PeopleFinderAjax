<?php

 ?>

 <div class="frm">
      <form action="" method="post"> <!-- controller/login.php -->
        <div class="form-group">
          <label for="user">Username:</label>
          <input type="text" name="user" placeholder="User name" class="form-control" id="userLogin">
        </div>
        <div class="form-group">
          <label for="pass">Password:</label>
          <input type="password" name="pass" placeholder="********" class="form-control" id="passLogin">
        </div>
          <button type="button" name="button" onclick="sendLogin();">Login</button>
      </form>
    </div>
