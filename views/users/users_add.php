<?php
require_once(__DIR__ . "/../../models/Userroles.php");

$user = new Userroles();
$use = $user->getAllUserroles();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Add Users</title>
    <link rel="stylesheet" href="../../assets/css/users_add_style.css">
    <script src="../../assets/js/users.js"></script>
</head>
<body>
    <div class="container">
    <h1>Add new User</h1>

        <form action="../../controllers/UsersController.php" method="post" onsubmit="return validateForm();">
        <input type="hidden" name="action" value="add">

        <label for="fname">First Name </label>
        <input type="text" id="fname" name="fname" onchange="showInputChange()">
        <p id="changeMessage"></p><br>

        <label for="lname">Last Name </label>
        <input type="text" id="lname" name="lname" onchange="showInputChange2()">
        <p id="changeMessage"></p><br>

        <label for="email">Email </label>
        <input type="email" id="email" name="email" onchange="showInputChange3()">
        <p id="changeMessage"></p><br>

        <label for="password">Password </label>
        <input type="text" id="password" name="password" onkeydown="characterCount()">
        <p id="characterCounter"></p><br>

        <label for="phone">Phone </label>
        <input type="number" id="phone" name="phone"><br><br>

        <label for="district">District</label>
        <input type="text" id="district" name="district"><br><br>

        <label for="subdistrict">Subdistrict</label>
        <input type="text" id="subdistrict" name="subdistrict"><br><br>

        <label for="area">AREA  </label>
        <input type="text" id="area" name="area"><br><br>

        <label for="postalcode">Postal Code  </label>
        <input type="number" id="postalcode" name="postalcode"><br><br>

        <label for="registrationdate">Registration Date  </label>
        <input type="date" id="registrationdate" name="registrationdate"><br><br>

        <label for="roleid">Role ID </label>
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
                <button type="submit">Add User</button>
            </div>
        </form>
    </div>
</body>

</html>