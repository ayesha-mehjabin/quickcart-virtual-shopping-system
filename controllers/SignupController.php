<?php
require_once __DIR__ . "/../models/SignupModel.php"; 

    if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $action = $_POST['action'];
    $signup = new Signup();
    
    if($action == 'signup'){
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
       
        
        $signup->addSignup($fname, $lname, $email, $password, $phone);
    }

}  

?>
