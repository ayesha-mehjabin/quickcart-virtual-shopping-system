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

    elseif($action == 'delete')
    {
        $roleid = $_POST['roleid'];

        $users->deleteUserroles($roleid);
    }
    elseif($action == 'update'){

        $roleid = $_POST['roleid'];
        $rolename = $_POST['rolename'];

        $users->updateUserroles($roleid, $rolename);


    }
    
}
?>

