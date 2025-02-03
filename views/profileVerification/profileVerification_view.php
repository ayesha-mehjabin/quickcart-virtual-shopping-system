<?php
require_once(__DIR__ . "/../../models/ProfileVerification.php");

$user = new ProfileVerification();
$use = $user->getAllProfileVerification();
?>

<!DOCTYPE html>
<html>

<head>
    <title>View Users</title>
    <link rel="stylesheet" href="../../assets/css/profileverification_view_style.css">
</head>

<body>
    <div class="container">
        <h1>Users</h1>
        <table>
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Verification ID</th>
                    <th>Verification Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($use as $user):
                ?>
                    <tr>
                        <td><?php echo $user['UserID']; ?></td>
                        <td><?php echo $user['VerificationID']; ?></td>
                        <td><?php echo $user['VerificationDate']; ?></td>
                        <td><?php echo $user['Status']; ?></td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>