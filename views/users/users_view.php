<?php
require_once(__DIR__ . "/../../models/Users.php");

$user = new Users();
$use = $user->getAllUsers();
?>

<!DOCTYPE html>
<html>

<head>
    <title>View Users</title>
    <link rel="stylesheet" href="../../assets/css/users_view_style.css">
</head>

<body>
    <div class="container">
        <h1>Users</h1>
        <table>
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phone</th>
                    <th>District</th>
                    <th>Subdistrict</th>
                    <th>AREA</th>
                    <th>Postal Code</th>
                    <th>Registration Date</th>
                    <th>Role ID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($use as $user):
                ?>
                    <tr>
                        <td><?php echo $user['UserID']; ?></td>
                        <td><?php echo $user['FirstName']; ?></td>
                        <td><?php echo $user['Last_Name']; ?></td>
                        <td><?php echo $user['Email']; ?></td>
                        <td><?php echo $user['Password']; ?></td>
                        <td><?php echo $user['Phone']; ?></td>
                        <td><?php echo $user['District']; ?></td>
                        <td><?php echo $user['Subdistrict']; ?></td>
                        <td><?php echo $user['AREA']; ?></td>
                        <td><?php echo $user['PostalCode']; ?></td>
                        <td><?php echo $user['RegistrationDate']; ?></td>
                        <td><?php echo $user['RoleID']; ?></td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>