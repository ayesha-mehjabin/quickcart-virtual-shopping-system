<?php
require_once(__DIR__ . "/../../models/Product.php");

$product = new Product();
$products = $product->getAllProducts();
?>

<!DOCTYPE>
<html>

<head>
    <title>View Product</title>
    <link rel="stylesheet" href="../../assets/css/product_view_style.css">
</head>

<body>
    <div class="container">
        <h1>Available Products</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Stock Quantity</th>
                    <th>Image</th>
                    <th>price</th>
                    <th>Category ID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($products as $pro):
                ?>
                    <tr>
                        <td><?php echo $pro['ProductID']; ?></td>
                        <td><?php echo $pro['ProName']; ?></td>
                        <td><?php echo $pro['ProDescription']; ?></td>
                        <td><?php echo $pro['ProStock']; ?></td>
                        <td><?php echo '<img src="' . $pro['ProImageURL'] . '" alt="Product Image">' ?></td>
                        <td><?php echo $pro['ProPrice']; ?></td>
                        <td><?php echo $pro['CategoryID']; ?></td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>