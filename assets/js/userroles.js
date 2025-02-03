

function checkRolename() {
    var rolename = document.getElementById("rolename").value;
    const Regex = /^[a-zA-Z]+$/;

    if (rolename.trim() === "" || !Regex.test(rolename)) {
        document.getElementById("error").innerHTML = "Enter a valid role name (letters only)";
        return false;
    } else {
        document.getElementById("error").innerHTML = "";
        return true;
    }
}

function validation() {
    return checkRolename(); // This ensures validation properly prevents form submission
}

// Attach validation function to form submit
document.addEventListener("DOMContentLoaded", function () {
    document.querySelector("form").addEventListener("submit", function (event) {
        if (!validation()) {
            event.preventDefault(); // Prevent form submission if validation fails
        }
    });
});
