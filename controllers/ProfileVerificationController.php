<?php
require_once '../models/ProfileVerification.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $action = $_POST['action'];
    $profileverification = new ProfileVerification();
    
    if($action == 'add'){

        $userid = $_POST['userid']; 
        $status = $_POST['status'];
        $verificationdate = $_POST['verificationdate'];
       
        $users->addProfile($userid, $status, $verificationdate);
    }

    elseif($action == 'delete')
    {
        $verificationid = $_POST['verificationid'];

        $users->deleteProfile($verificationid);
    }
    elseif($action == 'update'){

        $userid = $_POST['userid'];
        $status = $_POST['status']; 
        $verificationdate = $_POST['verificationdate'];

        $users->updateProfile($userid, $status, $verificationdate);


    }
    
}
?>

