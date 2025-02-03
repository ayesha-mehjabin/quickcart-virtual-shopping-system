<?php
require_once(__DIR__ . "/../models/Userroles.php");

$userroles = new Userroles();
?>

<!DOCTYPE html>
<html>

<head>
    <title>User Roles</title>
    <link rel="stylesheet" href="../assets/css/userroles_style.css">
</head>
<body>
    <div class="container">
    <h1>User Roles</h1>

        <form action="../controllers/UserrolesController.php" method="post">
        <input type="hidden" name="action" value="add">

        <label for="rolename">Role Name</label>
        <input type="text" id="rolename" name="rolename"><br><br>

        <div class="btn">
                <button type="submit">Add Role</button>
            </div>
        </form>
    </div>


<script src="../assets/js/userroles.js"></script>

</body>

</html>