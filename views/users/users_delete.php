<?php
require_once(__DIR__ . "/../../models/Users.php");

$user = new Users();
$use = $user->getAllUsers();
?>

<!DOCTYPE html>

<head>
    <title>Delete User</title>
    <link rel="stylesheet" href="../../assets/css/users_delete_style.css">
</head>
<body>
    <div class="container">
        <h1>Delete User</h1>
        <form action="../../controllers/UsersController.php" method="post">

            <input type="hidden" name="action" value="delete">
            <label for="userid">User Id:</label>
            <input type="number" id="userid" name="userid"><br><br>

            <div class="btn">
                <button type="submit">Detele user</button>
            </div>
        </form>
    </div>
    
</body>
</html>