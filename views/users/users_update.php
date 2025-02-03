<?php
require_once(__DIR__ . "/../../models/Userroles.php");
require_once(__DIR__ . "/../../models/Users.php");

$user = new Userroles();
$use = $user->getAllUserroles();

$user = new Users();
$use = $user->getAllUsers();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Update User</title>
    <link rel="stylesheet" href="../../assets/css/users_update_style.css">
    <script src="../../assets/js/users.js"></script>
    
</head>

<body>
    <div class="container">
        <h1>Update User</h1>

        <form action="../../controllers/UsersController.php" method="post" onsubmit="return validateForm();">
            <input type="hidden" name="action" value="update">

            <label for="userid">User Id</label>
            <select id="userid" name="userid" class="dropdown">
            <option value="" disabled selected>-- Select Role ID --</option>
                <?php
                foreach ($use as $role)
                {
                    echo "<option value = '" . $role['UserID'] . "'>" . $role['UserID'] . "</option>";
                }
                ?>  
        </select><br>

            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" placeholder="Enter User First Name" onchange="showInputChange()">
            <p id="changeMessage"></p>

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" placeholder="Enter User Last Name" onchange="showInputChange2()">
            <p id="changeMessage"></p>

            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Enter User Email" onchange="showInputChange3()">
            <p id="changeMessage"></p>

            <label for="password">Password</label>
            <input type="text" id="password" name="password" placeholder="Enter User Password" onkeydown="characterCount()">
            <p id="changeMessage"></p>

            <label for="phone">Phone</label>
            <input type="number" id="phone" name="phone" placeholder="Enter User Phone"><br><br>

            <label for="district">District</label>
            <input type="text" id="district" name="district" placeholder="Enter User District"><br><br>

            <label for="subdistrict">Subdistrict</label>
            <input type="text" id="subdistrict" name="subdistrict" placeholder="Enter User Subdistrict"><br><br>

            <label for="area">AREA</label>
            <input type="text" id="area" name="area" placeholder="Enter User AREA"><br><br>

            <label for="postalcode">Postal Code </label>
            <input type="number" id="postalcode" name="postalcode" placeholder="Enter User Postal Code "><br><br>

            <label for="registrationdate">Registration Date</label>
            <input type="date" id="registrationdate" name="registrationdate" placeholder="Enter User Registration Date"><br><br>

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