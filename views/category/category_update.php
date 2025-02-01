<?php
require_once(__DIR__ . "/../../models/Category.php");

$category = new Category();
$categories = $category->getAllCategories();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Update Category</title>
    <link rel="stylesheet" href="../../assets/css/category_update_style.css">
</head>

<body>
    <div class="container">
        <h1>Update Category</h1>

        <form action="../../controllers/CategoryController.php" method="post">
            <input type="hidden" name="action" value="update">

            <label for="id">Category Id:</label><br>
            <input type="number" id="id" name="id" placeholder="Enter Category Id"><br>

            <label for="name">New Category Name:</label><br>
            <input type="text" id="name" name="name" required><br>

            <label for="description">New Description:</label>
            <textarea id="description" name="description" rows="4" placeholder="Enter New Description" required></textarea><br>
            <div class="btn">
                <button type="submit">Update Category</button>
            </div>
        </form>
    </div>
</body>

</html>