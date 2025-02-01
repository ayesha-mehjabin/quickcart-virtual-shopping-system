<?php
require_once(__DIR__ . "/../../models/Category.php");

$category = new Category();
$categories = $category->getAllCategories();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="../../assets/css/product_add_style.css">
</head>

<body>
    <div class="container">
        <h1>Add New Product</h1>
        <form action="../../controllers/ProductController.php" method="post">
            <input type="hidden" name="action" value="add">
            
            <label for="name">Product Name:</label><br>
            <input type="text" id="name" name="name"><br>

            <label for="description">Description:</label><br>
            <textarea id="description" name="description" row="4"></textarea><br>

            <label for="quantity">Stock Quantity:</label><br>
            <input type="number" id="quantity" name="quantity"><br>

            <label for="price">Price:</label><br>
            <input type="number" id="price" name="price"><br>

            <label for="img">Image URL:</label><br>
            <input type="url" id="imag" name="img"><br>

            <label for="category">Category:</label><br>
            <select id="category" name="category" class="dropdown">
                <option value="" disabled selected>-- Select Category --</option>
                <?php
                foreach ($categories as $cat)
                {
                    echo "<option value = '" . $cat['CategoryID'] . "'>" . $cat['CategoryID'] . " - " . $cat['CatName'] . "</option>";
                }
                ?>
            </select><br>
            <div class="btn">
                <button input="submit">Add Product</button>
            </div>
        </form>
    </div>
</body>

</html>