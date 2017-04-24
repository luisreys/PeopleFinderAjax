function  loginAjax(){

  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('mainDiv').innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "view/loginView.php", true);
  xhttp.send();
}

function loadUserScreen(){
  xhttp = new XMLHttpRequest();
  console.log("aquiiii");
  xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('mainDiv').innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "view/userView.php", true);
  xhttp.send();
}

function sendLogin(){
    var xhttp = new XMLHttpRequest();
    var userLogin = document.getElementById('userLogin').value;
    var passLogin = document.getElementById('passLogin').value;

    xhttp.onreadystatechange = function(){
      if (this.readyState == 4 && this.status == 200) {
        if (this.responseText == 0) {
            //Success
            //document.getElementById('mainDiv').innerHTML = "Success";
            document.getElementById('loginLogout').innerHTML = '<span><a onclick="logoutAjax();">Logout.</a></span>';
            loadUserScreen();
            //I have to call to the user's view function here
            //I has to be with ajaxx and then i have to check in index if i have session or not
        }else {
            //Something was wrong
            // add a button
            document.getElementById('mainDiv').innerHTML = " no Success";
        }
      }else {
        console.log(this.readyState);
        console.log(this.status);
      }
    };
      xhttp.open("POST", "controller/login.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("user=" + userLogin + "&pass="+ passLogin);
    }

  function searchAjax(){
      xhttp = new XMLHttpRequest();

      xhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById('mainDiv').innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "view/searchView.php", true);
      xhttp.send();
  }

  function sendSearch(){
      xhttp = new XMLHttpRequest();

      var searchbox = document.getElementById('searchbox').value;

      xhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById('mainDiv').innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "view/resultView.php?searchbox=" + searchbox, true);
      xhttp.send();
  }

  function logoutAjax(){
    xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function(){
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById('loginLogout').innerHTML = '<span><a onclick="loginAjax();">Login.</a></span>';
        searchAjax();
      }
    };
    xhttp.open("GET", "controller/logout.php", true);
    xhttp.send();
  }
