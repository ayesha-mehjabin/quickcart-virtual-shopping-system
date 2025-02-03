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
       
        if (empty($userid) || empty($status) || empty($verificationdate)) {
            echo "All fields are required.";
        }else {
            $profileverification->addProfileVerification($userid, $status, $verificationdate);
            echo "Profile added successfully.";
        } 
    }

    elseif($action == 'delete')
    {
        $verificationid = $_POST['verificationid'];

        if ($verificationid)) {
            echo "<p style='color:red;'>Invalid Verification ID.</p>";
        } else {
            $users->deleteProfile($verificationid);
            echo "Verification ID deleted successfully.";
        }
        
    }

    elseif($action == 'update'){

        $userid = sanitize($_POST['userid'] ?? '');
        $status = sanitize($_POST['status'] ?? ''); 
        $verificationdate = sanitize($_POST['verificationdate'] ?? '');

        if (empty($userid) || empty($status) || empty($verificationdate)) {
            $errors[] = "All fields are required.";
        }
        if (empty($errors)) {
            $profileverification->addProfileVerification($userid, $status, $verificationdate);
            echo "Profile added successfully.";
        } else {
            foreach ($errors as $error) {
                echo "<p style='color:red;'>$error</p>";
            }
        }

    }  
}
?>

