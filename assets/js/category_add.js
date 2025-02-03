window.onload = function () {
    alert("Welcome to the Add Category page!");
  };
  
  function validateForm() {
    var name = document.getElementById("name").value.trim();
    var description = document.getElementById("description").value.trim();
  
    if (name === "") {
      alert("Category Name is required!");
      return false;
    }
    if (name.length < 3 || name.length > 50) {
      alert("Category Name Must be 3 to 50 Characters.");
      return false;
    }
    if (description.length > 250) {
      alert("Catageroy Characters shouldn't exceed 250 characters.");
      return false;
    }
    return true;
  }
  
  function showInputChange() {
    var nameField = document.getElementById("name").value;
    document.getElementById("changeMessage").innerHTML =
      "Category Name Changed: " + nameField;
  }
  
  function changeBgColor() {
    document.body.style.backgroundColor = "black";
  }
  
  function characterCount() {
    var description = document.getElementById("description").value.length;
    document.getElementById("characterCounter").innerHTML =
      "Characters: " + description;
  }
  