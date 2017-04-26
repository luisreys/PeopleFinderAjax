/*
* Login and Logout stuff
*
*/

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


/*
*   Search Stuff
*
*/
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

  function sendUserSearch(){
    xhttp = new XMLHttpRequest();

    var searchbox = document.getElementById('searchbox').value;

    xhttp.onreadystatechange = function(){
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById('mainDiv').innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "view/userView.php?searchbox=" + searchbox, true);
    xhttp.send();
  }


/*
*   Users Stuff
*
*/
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

  function showAllAjax(){
    xhttp = new XMLHttpRequest();

    var searchbox = document.getElementById('searchbox').value;

    xhttp.onreadystatechange = function(){
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById('mainDiv').innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "view/userView.php", true);
    xhttp.send();
  }


/*
*   People Management for normal Users
*     - updatePrsAjax
*     - addPrsAjax
*     - deletePrsAjax
*/

function updatePrsAjax(){
  xhttp = new XMLHttpRequest();
  console.log("updatePrsAjax");
  var id = document.getElementById("idUpdate").value;
  var fname = document.getElementById("fnameUpdate").value;
  var sname = document.getElementById("snameUpdate").value;
  var edit_form = document.getElementById("edit_form").value;

  xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText == 0) {
        console.log("updatePrsAjax inside Success");
        loadUserScreen();
        loadModal();
      }else {
        document.getElementById('mainDiv').innerHTML = this.responseText;
      }
    }
  };
  xhttp.open("GET", "controller/controlPeople.php?id=" + id + "&fname=" + fname + "&sname=" + sname + "&edit_form=" + edit_form, true);
  xhttp.send();
}

function addPrsAjax(){
  xhttp = new XMLHttpRequest();
  console.log("addPrsAjax");
  var id = document.getElementById("idAdd").value;
  var fname = document.getElementById("fnameAdd").value;
  var sname = document.getElementById("snameAdd").value;
  var add_form = document.getElementById("add_form").value;

  xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText == 0) {
        console.log("addPrsAjax inside Success");
        loadUserScreen();
        loadModal();
      }else {
        document.getElementById('mainDiv').innerHTML = this.responseText;
      }
    }
  };
  xhttp.open("GET", "controller/controlPeople.php?id=" + id + "&fname=" + fname + "&sname=" + sname + "&add_form=" + add_form, true);
  xhttp.send();
}

function deletePrsAjax(){
  xhttp = new XMLHttpRequest();
  console.log("addPrsAjax");
  var id = document.getElementById("idDelete").value;
  var delete_form = document.getElementById("delete_form").value;

  xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText == 0) {
        console.log("addPrsAjax inside Success");
        loadUserScreen();
        loadModal();
      }else {
        document.getElementById('mainDiv').innerHTML = this.responseText;
      }
    }
  };
  xhttp.open("GET", "controller/controlPeople.php?id=" + id + "&delete_form=" + delete_form, true);
  xhttp.send();
}


/*
*   People Management for Admin
*     - updateUserAjax
*     - addUserAjax
*     - deleteUserAjax
*/

function updateUserAjax(){
  xhttp = new XMLHttpRequest();

  var userUpdateUser = document.getElementById("userUpdateUser").value;
  var pwdUpdateUser = document.getElementById("pwdUpdateUser").value;
  var priUpdateUser = document.getElementById("priUpdateUser").value;
  var idUpdateUser = document.getElementById("idUpdateUser").value;
  var descriptionUpdateUser = document.getElementById("descriptionUpdateUser").value;
  var edit_form_user = document.getElementById("edit_form_user").value;
  console.log("update user: " + userUpdateUser + pwdUpdateUser + priUpdateUser + idUpdateUser + descriptionUpdateUser);
  xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText == 0) {
        console.log("updatePrsAjax inside Success");
        loadUserScreen();
        loadModal();
      }else {
        document.getElementById('mainDiv').innerHTML = this.responseText;
      }
    }
  };
  xhttp.open("GET", "controller/controlUsers.php?userUpdateUser=" + userUpdateUser + "&pwdUpdateUser=" + pwdUpdateUser + "&priUpdateUser=" + priUpdateUser + "&idUpdateUser=" + idUpdateUser + "&descriptionUpdateUser=" + descriptionUpdateUser + "&edit_form_user=" + edit_form_user, true);
  xhttp.send();
}

function addUserAjax(){
  xhttp = new XMLHttpRequest();
  var userUpdateUser = document.getElementById("userAddUser").value;
  var pwdUpdateUser = document.getElementById("pwdAddUser").value;
  var priUpdateUser = document.getElementById("priAddUser").value;
  var idUpdateUser = document.getElementById("idAddUser").value;
  var descriptionUpdateUser = document.getElementById("descriptionAddUser").value;
  var add_form_user = document.getElementById("add_form_user").value;
  console.log("add user: " + userUpdateUser + pwdUpdateUser + priUpdateUser + idUpdateUser + descriptionUpdateUser);
  xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText == 0) {
        console.log("addPrsAjax inside Success");
        loadUserScreen();
        loadModal();
      }else {
        document.getElementById('mainDiv').innerHTML = this.responseText;
      }
    }
  };
  xhttp.open("GET", "controller/controlUsers.php?userUpdateUser=" + userUpdateUser + "&pwdUpdateUser=" + pwdUpdateUser + "&priUpdateUser=" + priUpdateUser + "&idUpdateUser=" + idUpdateUser + "&descriptionUpdateUser=" + descriptionUpdateUser + "&add_form_user=" + add_form_user, true);
  xhttp.send();
}

function deleteUserAjax(){
  xhttp = new XMLHttpRequest();
  var id = document.getElementById("idDeleteUser").value;
  var delete_form_user = document.getElementById("delete_form_user").value;

  console.log("deletePrsAjax:"+ id);
  xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText == 0) {
        console.log("addPrsAjax inside Success");
        loadUserScreen();
        loadModal();
      }else {
        document.getElementById('mainDiv').innerHTML = this.responseText;
      }
    }
  };
  xhttp.open("GET", "controller/controlUsers.php?id=" + id + "&delete_form_user=" + delete_form_user, true);
  xhttp.send();
}

// Modal Message

function loadModal(){
  var modal = document.getElementById('myModal');
  modal.style.display = "block";
}

function closeModal(){
    var span = document.getElementsByClassName("close")[0];
    var modal = document.getElementById('myModal');
    modal.style.display = "none";
}

var modal = document.getElementById('myModal');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
