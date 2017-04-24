<?php
  session_start();

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">

    <script type="text/javascript" src="js/ajax.js" charset="utf-8"></script>
  </head>
    <body>
    <header>
        <div class="main-header">
        <div class="container">
          <div class="row">
              <div class="text-left col-md-6">
                <h2>Welcome </h2>
              </div>
              <div class="text-right col-md-6" id="loginLogout">
                <span><a onclick="loginAjax();">Login.</a></span>
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class="container">
        <div class="row">
          <div id="mainDiv">
            <?php
                if (isset($_SESSION['username'])) {
                  echo '<script type="text/javascript">loadUserScreen();</script>';
                }else {
                  echo '<script type="text/javascript">searchAjax();</script>';
                }
             ?>

          </div>
        </div>
      </div>
  </body>
</html>
