<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "../controllers/SignupController.php";
    $controller = new SignupController();
    $errors = $controller->register();
}
?>

<html>
<head>
<title>QuickCart: Sign Up</title>
</head>
<body>
<header>
    <h1>QuickCart</h1>
    <input type="text" placeholder="Search in QuickCart">
    <a href="#">Save More on App</a>
    <a href="#">Become a Seller</a>
    <a href="#">Help & Support</a>
    <a href="#">Login</a>
    <a href="#">Sign Up</a>
</header>
<h2>Create your QuickCart Account</h2>
    <?php if (!empty($errors)) { ?>
        <ul style="color: red;">
            <?php foreach ($errors as $error) { echo "<li>$error</li>"; } ?>
        </ul>
    <?php } ?>
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone"><br><br>

        <button type="submit">Signup</button>
        <p class="login-link">Already a member? <a href="login.php">Login here</a>.</p>
    </form>
</body>
</html>
