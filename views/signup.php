<html>
<head>
<title> Sign Up</title>
<link rel="stylesheet" href="../assets/css/signup_style.css">
</head>
<body>
<h1>Create your QuickCart Account</h1>
    <?php if (!empty($errors)) { ?>
        <ul style="color: red;">
            <?php foreach ($errors as $error) { echo "<li>$error</li>"; } ?>
        </ul>
    <?php } ?>
    <form method="POST" action="../controllers/SignupController.php">
    <input type="hidden" name="action" value="signup">
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname"><br>

        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone"><br>

        <label for="RoleID">Role ID:</label><br>
        <select id="RoleID" name="RoleID" class="dropdown">
        <option value="" disabled selected>-- Select Role ID --</option>
    <?php
        foreach ($RoleID as $Role)
            {
                echo "<option value = '" . $Role['RoleID'] . "'>" . $Role['OrderID'] . " - " . $Role['OrderName'] . "</option>";
             }
    ?>
    </select><br>
    <div class="btn">
        <button type="submit">Sign Up</button>
    </div>
        <p class="login-link">Already a member? <a href="login.php">Login here</a>.</p>
    </form>
</body>
</html>
