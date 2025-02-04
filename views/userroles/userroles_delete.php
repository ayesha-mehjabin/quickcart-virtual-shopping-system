<?php
require_once(__DIR__ . "/../../models/Userroles.php");

$user = new Userroles();
$use = $user->getAllUserroles();
?>

<!DOCTYPE html>

<head>
    <title>Delete User Role</title>
    <link rel="stylesheet" href="../../assets/css/userroles_delete_style.css">
</head>
<body>
    <div class="container">
        <h1>Delete User Role</h1>
        <form action="../../controllers/UserrolesController.php" method="post">

            <input type="hidden" name="action" value="delete">
            <label for="roleid">Role Id:</label>
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
                <button type="submit">Detele User Role</button>
            </div>
        </form>
    </div>
    
</body>
</html>