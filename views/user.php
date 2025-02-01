<?php
require '../controllers/user_control.php';
?>

<!DOCTYPE html>

<head>

</head>
<body>

    <form action="" method="post">
        <h1>User</h1>

        <label for="fname">First Name </label>
        <input type="text" id="fname" name="fname"><br><br>

        <label for="lname">Last Name </label>
        <input type="text" id="lname" name="lname"><br><br>

        <label for="phone">Phone </label>
        <input type="number" id="phone" name="phone"><br><br>

        <label for="address">Address</label>
        <input type="text" id="address" name="address"><br><br>

        <label for="rname">Role Name </label>
        <input type="text" id="rname" name="rname"><br><br>

        <label for="rid">Role ID </label>
        <input type="number" id="rid" name="rid"><br><br>

        <input type="submit" value="Submit">
    </form>
    
</body>
</html>