<?php
require_once(__DIR__ . "/../../models/Userroles.php");

$user = new Userroles();
$use = $user->getAllUserroles();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Update User Roles</title>
    <link rel="stylesheet" href="../../assets/css/userroles_add_style.css">
    <script src="../../assets/js/userroles.js"></script>
</head>
<body>
    <div class="container">
    <h1>Update User Roles</h1>

        <form action="../../controllers/UserrolesController.php" method="post" onsubmit="return checkRolename();">
        <input type="hidden" name="action" value="add">

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

        <label for="rolename">Role Name</label>
        <input type="text" id="rolename" name="rolename" onchange="showInputChange()">
        <p id="changeMessage"></p><br><br>

        <div class="btn">
                <button type="submit" onclick="changeBgColor()">Update User Role</button>
            </div>
        </form>
    </div>


</body>

</html>