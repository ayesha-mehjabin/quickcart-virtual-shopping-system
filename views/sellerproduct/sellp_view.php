<?php
require_once(__DIR__ . "/../../models/SellerProduct.php");

$sellProduct = new SellProduct();
$sellProduct = $sellProduct->getAllSellProduct();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Seller Product</title>
    <link rel="stylesheet" href="../../assets/css/sellp_view_style.css">
</head>

<body>
    <div class="container">
        <h1>Seller Product Details</h1>
        <table>
            <thead>
                <tr>
                    <th>Sellproduct ID</th>
                    <th>Sellproduct Date</th>
                    <th>Product ID</th>
                    <th>User ID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($sellProduct as $sellp):
                ?>
                    <tr>
                        <td><?php echo $sellp['SelProID']; ?></td>
                        <td><?php echo $sellp['SelProAddedDate']; ?></td>
                        <td><?php echo $sellp['ProductID']; ?></td>
                        <td><?php echo $sellp['UserID']; ?></td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>