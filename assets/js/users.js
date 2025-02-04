window.onload = function () {
    alert("Welcome to the Users page!");
  };
 
  function validateForm() {
    var fname = document.getElementById("fname").value.trim();
    var lname = document.getElementById("lname").value.trim();
    var email = document.getElementById("email").value.trim();
    var password = document.getElementById("password").value.trim();
   
 
    if (fname === "") {
      alert("First Name is required!");
      return false;
    }
    if (fname.length < 3 || fname.length > 50) {
      alert("First Name Must be 3 to 50 Characters.");
      return false;
    }
    if (lname === "") {
        alert("Last Name is required!");
        return false;
    }
    if (fname.length < 3 || fname.length > 50) {
        alert("Last Name Must be 3 to 50 Characters.");
        return false;
      }
    if (email ==="/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;") {
      alert(" Characters shouldn't exceed 250 characters.");
      return false;
    }
    if (password<3) {
        alert("First Name Must be 3 to 10 Characters.");
        return false;
      }
    return true;
  }

  function showInputChange() {
    var fnameField = document.getElementById("fname").value;
    document.getElementById("changeMessage").innerHTML =
      "First Name Changed: " + fnameField;
  }

  function showInputChange2() {
    var lnameField = document.getElementById("lname").value;
    document.getElementById("changeMessage").innerHTML =
      "Last Name Changed: " + lnameField;
  }

  function showInputChange3() {
    var emailField = document.getElementById("email").value;
    document.getElementById("changeMessage").innerHTML =
      "Email Changed: " + emailField;
  }

  function characterCount() {
    var password = document.getElementById("password").value.length;
    document.getElementById("characterCounter").innerHTML =
      "Password: " + password;
  }