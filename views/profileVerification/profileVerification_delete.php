<?php
require_once(__DIR__ . "/../../models/ProfileVerification.php");

$user = new ProfileVerification();
$use = $user->getAllProfileVerification();
?>


<!DOCTYPE html>

<head>
    <title>Delete Profile Verification</title>
    <link rel="stylesheet" href="../../assets/css/profileverification_add_style.css">
</head>
<body>
<div class="container">
        <h1>Delete Profile Verification</h1>
        <form action="../../controllers/profileVerificationController.php" method="post">

            <input type="hidden" name="action" value="delete">
            <label for="verificationid">Verification ID</label>
            <input type="number" id="verificationid" name="verificationid"><br><br>

            <div class="btn">
                <button type="submit">Detele user</button>
            </div>
        </form>
    </div>
    
</body>
</html>