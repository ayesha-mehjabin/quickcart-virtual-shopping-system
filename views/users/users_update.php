<?php
require_once(__DIR__ . "/../../models/Userroles.php");

$user = new Userroles();
$use = $user->getAllUserroles();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Update User</title>
    <link rel="stylesheet" href="../../assets/css/users_update_style.css">
    
</head>

<body>
    <div class="container">
        <h1>Update User</h1>

        <form action="../../controllers/UsersController.php" method="post">
            <input type="hidden" name="action" value="update">

            <label for="userid">User Id</label>
            <input type="number" id="userid" name="userid" placeholder="Enter User Id"><br>

            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" placeholder="Enter User First Name"><br>

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" placeholder="Enter User Last Name"><br>

            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Enter User Email"><br>

            <label for="password">Password</label>
            <input type="text" id="password" name="password" placeholder="Enter User Password"><br>

            <label for="phone">Phone</label>
            <input type="number" id="phone" name="phone" placeholder="Enter User Phone"><br>

            <label for="district">District</label>
            <input type="text" id="district" name="district" placeholder="Enter User District"><br>

            <label for="subdistrict">Subdistrict</label>
            <input type="text" id="subdistrict" name="subdistrict" placeholder="Enter User Subdistrict"><br>

            <label for="area">AREA</label>
            <input type="text" id="area" name="area" placeholder="Enter User AREA"><br>

            <label for="postalcode">Postal Code </label>
            <input type="number" id="postalcode" name="postalcode" placeholder="Enter User Postal Code "><br>

            <label for="registrationdate">Registration Date</label>
            <input type="date" id="registrationdate" name="registrationdate" placeholder="Enter User Registration Date"><br>

            <label for="roleid">Role ID</label>
            <select id="roleid" name="roleid" class="dropdown">
            <option value="" disabled selected>-- Select Role ID --</option>
                <?php
                foreach ($use as $role)
                {
                    echo "<option value = '" . $role['RoleID'] . "'>" . $role['RoleID'] . " - " . $role['RoleName'] . "</option>";
                }
                ?>  
        </select><br>

            
            <div class="btn">
                <button type="submit">Update User</button>
            </div>
        </form>
    </div>
</body>

</html>