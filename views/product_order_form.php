<?php

require_once(__DIR__ . "/../models/Product.php");
//require_once(__DIR__ . "/../models/User.php");

$product = new Product();
$products = $product->getAllProducts();

//$user = new Users();
//$us = $user->getAllUsers(); 

?>
<!DOCTYPE html>
<html>

<head>
    <title>Place Order</title>
    <link rel="stylesheet" href="../assets/css/product_order_form_style.css?v=1">
</head>

<body>
    
    <div class="head1">
        <h1>Place Your Order</h1>

        <form action="../controllers/ProductOrderFormController.php" method="post">
            <input type="hidden" name="action" value="placeOrder">

            <label for="user_id">User:</label>
            <select id="user_id" name="user_id" class="dropdown">
                <option value="" disabled selected>-- Who are you? --</option>
                <?php
                foreach ($us as $u) {
                    echo "<option value = '" . $u['UserID'] . "'>" . $u['UserID'] . " - " . $u['FirstName'] . " " . $u['Last_Name'] . "</option>";
                }
                ?>
            </select><br>

            <label for="product_id">Select Product:</label>
            <select id="product_id" name="product_id" class="dropdown">
                <option value="" disabled selected>-- Select Product --</option>
                <?php
                foreach ($products as $prod) {
                    echo "<option value = '" . $prod['ProductID'] . "'>" . $prod['ProductID'] . " - " . $prod['ProName'] . "</option>";
                }
                ?>
            </select>
            <br>

            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1">
            <br>
           
    </div>
    <div class="head1">
        <h3>Delivery Address</h3>
        <label for="district">District:</label>
        <input type="text" id="district" name="district">
        <br>

        <label for="subdistrict">Subdistrict:</label>
        <input type="text" id="subdistrict" name="subdistrict">
        <br>

        <label for="area">Area:</label>
        <input type="text" id="area" name="area">
        <br>

        <label for="postal_code">Postal Code:</label>
        <input type="number" id="postal_code" name="postal_code">
        <br>

        <label for="payment_method">Payment Method:</label>
        <select id="payment_method" name="payment_method" class="dropdown">
        <option value="" disabled selected>-- Select Payment Method --</option>
            <option value="Cash">Cash On Delivery</option>
            <option value="Card">Bkash</option>
            <option value="Online">Nagad</option>
        </select>
        <br>
        <div class="btn">
        <button type="submit" >Place Order</button>
        </form>
       </div>
    </div>
    
</body>

</html>