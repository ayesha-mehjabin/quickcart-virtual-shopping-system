<?php
require_once '../models/ProfileVerification.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $action = $_POST['action'];
    $profileVerification = new profileVerification();
 
    if($action == 'add'){
        $userid = $_POST['userid']; 
        $status = $_POST['status'];
        $verificationdate = $_POST['verificationdate'];
       
        if (empty($userid) || empty($status) || empty($verificationdate)) {
            echo "All fields are required.";
        }else {
            $profileVerification->addprofileVerification($userid, $status, $verificationdate);
            echo "Profile added successfully.";
        } 
    }

    elseif($action == 'delete')
    {
        $verificationid = $_POST['verificationid'];

        if ($verificationid == "") {
            echo "Invalid Verification ID.";
        } else {
            $profileVerification->deleteprofileVerification($verificationid);
            echo "Verification ID deleted successfully.";
        }
        
    }

    elseif($action == 'update'){

        $userid = sanitize($_POST['userid'] ?? '');
        $status = sanitize($_POST['status'] ?? ''); 
        $verificationdate = sanitize($_POST['verificationdate'] ?? '');

        if (empty($userid) || empty($status) || empty($verificationdate)) {
            echo "All fields are required.";
        } else {
            $profileVerification->updateprofileVerification($userid, $status, $verificationdate);
            echo "Profile updete successfully.";
        } 

    }  
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}
?>

