<?php
require_once(__DIR__ . "/../../models/SellerProduct.php");

$sellProduct = new SellProduct();
$sellProduct = $sellProduct->getAllSellProduct();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Seller Product</title>
    <link rel="stylesheet" href="../../assets/css/sellp_update_style.css">
</head>

<body>
    <div class="container">
        <h1>Update Sell Product</h1>

        <form action="../../controllers/SellProductController.php" method="post">
            <input type="hidden" name="action" value="add"> <br>

            <label for="selpro_id">Sell product ID:</label>
        <input type="number" id="selpro_id" name="selpro_id" required 
               placeholder="Enter new sell product ID"><br><br>

        <label for="selpro_date">Sell product Date:</label>
        <input type="date" id="selpro_date" name="selpro_date" required><br><br>
 
        </select><br>
            <div class="btn">
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
</body>

</html>