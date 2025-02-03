<?php
/*require_once(__DIR__ . "/../../models/Order.php");

$category = new Category();
$categories = $category->getAllCategories();*/
?>
<html>
<head>
    <title> Payment</title>
    <link rel="stylesheet" href="../../assets/css/payment_add_style.css">
</head>
<body>
    <h1> Add Payment</h1>
    <form method="POST" action="../controllers/PaymentController.php">
        <input type="hidden" name="action" value="add">
    <label>Payment ID:</label>
    <input type="number" id="id" name="PaymentID"><br>
    <label>Payment Method:</label>
    <select name="PaymentMethod">
        <option value="cash">Cash</option>
        <option value="card">Card</option>
        <option value="online">Online</option>
    </select> <br>  
    <label>Payment Status:</label>
    <select name="PaymentStatus">
        <option value="Paid">Paid</option>
        <option value="Unpaid">Unpaid</option>
    </select><br>
    <label>Payment Date:</label>
    <input type="date" id="PaymentDate" name="PaymentDate"><br>
    <label>Amount:</label>
    <input type="number" id="amount" name="Amount" step="0.01" ><br>
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

    <button type="submit">Add Payment</button>
</form>
</body>
</html>
