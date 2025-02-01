<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "../controllers/LoginController.php";
    $controller = new LoginController();
    $response = $controller->login();

    $errors = $response["errors"];
    $success = $response["success"];
}
?>

<html>
<head>
    <title>QuickCart: Login Page</title>
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
    <h2>Login to QuickCart</h2>

    <?php if (!empty($errors)) { ?>
        <ul style="color: red;">
            <?php foreach ($errors as $error) { echo "<li>$error</li>"; } ?>
        </ul>
    <?php } ?>

    <?php if (!empty($success)) { ?>
        <p style="color: green;"><?php echo $success; ?></p>
    <?php } ?>

    <form method="POST" action="">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>

        <button type="submit">Login</button>
        <p class="login-link">Haven't Signed Up Yet? <a href="signup.php">Sign Up Now</a>.</p>

    </form>
</body>
</html>
