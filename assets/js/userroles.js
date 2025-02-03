window.onload = function () {
    alert("Welcome to the userroles page!");
  };

function checkRolename() {
    var rolename = document.getElementById("rolename").value.trim();


    if (rolename === "") {
        alert("Role Name is required!");
        return false;
    } 
    if (rolename.length < 3 || rolename.length > 50) {
        alert("Role Name Must be 3 to 50 Characters.");
        return false;
      }
}


function showInputChange() {
    var nameField = document.getElementById("rolename").value;
    document.getElementById("changeMessage").innerHTML =
      "Role Name Changed: " + nameField;
  }


  
  function changeBgColor() {
    document.body.style.backgroundColor = "black";
  }
