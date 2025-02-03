<?php
require_once(__DIR__ . "/../../models/SellerProduct.php");

$sellProduct = new SellProduct();
$sellProduct = $sellProduct->getAllSellProduct();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Seller Product</title>
    <link rel="stylesheet" href="../../assets/css/sellp_delete_style.css">
</head>

<body>
    <div class="container">
        <h1>Delete Sell Product</h1>

        <form action="../../controllers/SellProductController.php" method="post">
            <input type="hidden" name="action" value="add"> <br>

            <label for="selpro_id">Sell product ID:</label>
        <input type="number" id="selpro_id" name="selpro_id" required ><br><br>

            <div class="btn">
                <button type="submit">Cancel</button>
            </div>
        </form>
    </div>
</body>

</html>