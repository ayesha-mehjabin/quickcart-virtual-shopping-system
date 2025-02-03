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
    <title> Login </title>
    <link rel="stylesheet" href="../assets/css/login_style.css">
</head>
<body>
    <h1>Login to QuickCart</h1>

    <?php if (!empty($errors)) { ?>
        <ul style="color: red;">
            <?php foreach ($errors as $error) { echo "<li>$error</li>"; } ?>
        </ul>
    <?php } ?>

    <?php if (!empty($success)) { ?>
        <p style="color: green;"><?php echo $success; ?></p>
    <?php } ?>

    <form method="POST" action="../controllers/LoginController.php">
    <input type="hidden" name="action" value="login">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>

    <div class="btn">
        <button type="submit">Login</button>
    </div>   
        <p class="login-link">Haven't Signed Up Yet? <a href="signup.php">Sign Up Now</a>.</p>   
    </form>
</body>
</html>
