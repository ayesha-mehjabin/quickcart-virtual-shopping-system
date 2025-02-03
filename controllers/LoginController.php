<?php
require_once __DIR__ . "/../models/LoginModel.php"; 

    if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $action = $_POST['action'];
    $login = new Login();
    
    if($action == 'login'){
        $email = $_POST['email'];
        $password = $_POST['password'];

        
        

        $login->addLogin( $email, $password);
    }
}
 

?>
