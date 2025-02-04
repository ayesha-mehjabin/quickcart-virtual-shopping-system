<?php
require_once(__DIR__ . "/../../models/Userroles.php");

$user = new Userroles();
$use = $user->getAllUserroles();
?>

<!DOCTYPE html>
<html>

<head>
    <title>View User Role</title>
    <link rel="stylesheet" href="../../assets/css/userroles_view_style.css">
</head>

<body>
    <div class="container">
        <h1>User Role</h1>
        <table>
            <thead>
                <tr>
                    <th>Role ID</th>
                    <th>Role Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($use as $user):
                ?>
                    <tr>
                        <td><?php echo $user['RoleID']; ?></td>
                        <td><?php echo $user['RoleName']; ?></td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>