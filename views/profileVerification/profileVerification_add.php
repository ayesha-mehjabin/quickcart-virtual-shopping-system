<?php
require_once(__DIR__ . "/../../models/Users.php");

$user = new Users();
$use = $user->getAllUsers();
?>



<!DOCTYPE html>

<head>
    <title>Add Profile Verification</title>
    <link rel="stylesheet" href="../../assets/css/profileverification_add_style.css">
</head>
<body>
    <div class="container">
    <h1>Add Profile Verification</h1>

    <form action="../../controllers/ProfileVerificationController.php" method="post">
    <input type="hidden" name="action" value="add">

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
        <input type="text" id="status" name="status"><br><br>
  

        <label for="verificationdate">Verification Date</label>
        <input type="date" id="verificationdate" name="verificationdate"><br><br>
        

        <div class="btn">
                <button type="submit">Add Profile</button>
            </div>
        </form>
    </div>
</body>

</html>