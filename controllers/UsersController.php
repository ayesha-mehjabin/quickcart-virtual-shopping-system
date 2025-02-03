<?php
require_once '../models/Users.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $action = $_POST['action'];
    $users = new Users();
    
    if($action == 'add'){

        $fname = $_POST['fname']; 
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $district = $_POST['district'];
        $subdistrict = $_POST['subdistrict'];
        $area = $_POST['area'];
        $postalcode = $_POST['postalcode'];
        $registrationdate = $_POST['registrationdate'];
        $roleid = $_POST['roleid'];
       
        $users->addUsers($fname, $lname, $email, $password, $phone, $district, $subdistrict, $area, $postalcode, $registrationdate, $roleid);
    }

    elseif($action == 'delete')
    {
        $userid = $_POST['userid'];

        $users->deleteUsers($userid);
    }
    elseif($action == 'update'){

        $userid = $_POST['userid'];
        $fname = $_POST['fname']; 
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $district = $_POST['district'];
        $subdistrict = $_POST['subdistrict'];
        $area = $_POST['area'];
        $postalcode = $_POST['postalcode'];
        $registrationdate = $_POST['registrationdate'];
        $roleid = $_POST['roleid'];

        $users->updateUsers($userid, $fname, $lname, $email, $password, $phone, $district, $subdistrict, $area, $postalcode, $registrationdate, $roleid);


    }
    
}
?>

