<?php
require_once(__DIR__ . "/../../models/Category.php");

$category = new Category();
$categories = $category->getAllCategories();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Add Category</title>
    <link rel="stylesheet" href="../../assets/css/category_add_style.css">
</head>

<body>
    <div class="container">
        <h1>Add New Category</h1>

        <form action="../../controllers/CategoryController.php" method="post">
            <input type="hidden" name="action" value="add"> <br>
            <label for="name">Category Name:</label><br>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="description">Description:</label><br>
            <textarea id="description" name="description" rows="4"></textarea>
            <br>
            <div class="btn">
                <button type="submit">Add Category</button>
            </div>
        </form>
    </div>
</body>

</html>