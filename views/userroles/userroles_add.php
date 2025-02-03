<?php
require_once(__DIR__ . "/../../models/Userroles.php");

$userroles = new Userroles();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Add User Roles</title>
    <link rel="stylesheet" href="../../assets/css/userroles_add_style.css">
    <script src="../../assets/js/userroles.js"></script>
</head>
<body>
    <div class="container">
    <h1>Add User Roles</h1>

        <form action="../../controllers/UserrolesController.php" method="post" onsubmit="return checkRolename();">
        <input type="hidden" name="action" value="add">

        <label for="rolename">Role Name</label>
        <input type="text" id="rolename" name="rolename" >
        <br><br>

        <div class="btn">
                <button type="submit" onclick="changeBgColor()">Add Role</button>
            </div>
        </form>
    </div>



</body>

</html>