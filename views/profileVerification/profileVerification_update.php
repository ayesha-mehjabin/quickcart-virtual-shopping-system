<?php
require_once(__DIR__ . "/../../models/Users.php");

$user = new Users();
$use = $user->getAllUsers();
?>



<!DOCTYPE html>

<head>
    <title>Update Profile Verification</title>
    <link rel="stylesheet" href="../../assets/css/profileverification_add_style.css">
</head>
<body>
    <div class="container">
    <h1>Update Profile Verification</h1>

    <form action="../../controllers/profileVerificationController.php" method="post">
    <input type="hidden" name="action" value="update">

        <label for="userid">User ID </label>
        <select id="userid" name="userid" class="dropdown">
            <option value="" disabled selected>-- Select User ID --</option>
                <?php
                foreach ($use as $role)
                {
                    echo "<option value = '" . $role['UserID'] . "'>" . $role['UserID'] . "</option>";
                }
                ?>  
        </select><br><br>

        <label for="status">Status </label>
        <select id="status" name="status" class="dropdown">
            <option value="" disabled selected>-- Select Status --</option>
                <?php
                foreach ($use as $role)
                {
                    echo "<option value = '" . $role['Status'] . "'>" . $role['Status'] . "</option>";
                }
                ?>  
        </select><br><br>

        <label for="verificationdate">Verification Date</label>
        <input type="date" id="verificationdate" name="verificationdate"><br><br>
        

        <div class="btn">
                <button type="submit">Update Prrofile</button>
            </div>
        </form>
    </div>
</body>

</html>