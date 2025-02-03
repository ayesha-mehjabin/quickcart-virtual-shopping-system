<html>
<head>
    <title>Delete Payment</title>
    <link rel="stylesheet" href="../../assets/css/payment_delete_style.css">
</head>
<body>
    <h1>Delete Payment</h1>
    <form method="GET" action="payment_delete.php">
        <label>Payment ID:</label>
        <input type="number" name="PaymentID"><br>

        <label for="OrderID">Order ID:</label><br>
    <select id="OrderID" name="OrderID" class="dropdown">
        <option value="" disabled selected>-- Select Order ID --</option>
    <?php
        foreach ($OrderID as $Order)
            {
                echo "<option value = '" . $Order['OrderID'] . "'>" . $Order['OrderID'] . " - " . $Order['OrderName'] . "</option>";
             }
    ?>
    </select><br>

            <button type="submit">Delete Payment</button>
            <button type="reset">Cancel</button>       
    </form>
</body>
</html>
