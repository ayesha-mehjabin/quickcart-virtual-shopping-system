<?php
include '../models/user_model.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form values and sanitize them
    $fname = htmlspecialchars(trim($_POST["fname"]));
    $lname = htmlspecialchars(trim($_POST["lname"]));
    $phone = htmlspecialchars(trim($_POST["phone"]));
    $address = htmlspecialchars(trim($_POST["address"]));
    $rname = htmlspecialchars(trim($_POST["rname"]));
    $rid = htmlspecialchars(trim($_POST["rid"]));

    // Basic validation
    if (empty($fname) || empty($lname) || empty($phone) || empty($address) || empty($rname) || empty($rid)) {
        echo "All fields are required!";
    } elseif (!preg_match("/^[0-9]{10,15}$/", $phone)) { // Phone validation (10-15 digits)
        echo "Invalid phone number format!";
    } elseif (!filter_var($rid, FILTER_VALIDATE_INT)) { // Role ID validation (must be an integer)
        echo "Invalid Role ID!";
    } else {
        // Instantiate MyDB class and insert user data
        $db = new MyDB();
        $result = $db->addUser("users", $fname, $lname, $phone, $address, $rname, $rid);

        // Provide feedback
        echo $result;

        // Close connection
        $db->closeCon();
    }
}
?>
