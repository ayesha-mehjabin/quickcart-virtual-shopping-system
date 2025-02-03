<?php
require_once '../models/Userroles.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $action = $_POST['action'];
    $userroles = new Userroles();
    
    if($action == 'add'){
        
        $rolename = $_POST['rolename'];
       
        $userroles->addUserroles($rolename);
    }
    
}
?>

