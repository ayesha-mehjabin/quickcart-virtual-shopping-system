<?php
require_once(__DIR__ . "/../../models/Category.php");

$category = new Category();
$categories = $category->getAllCategories();
?>

<!DOCTYPE html>

<html>

<head>
    <title>Delete Category</title>
    <link rel="stylesheet" href="../../assets/css/category_delete_style.css">
</head>

<body>
    <div class="container">
        <h1>Delete Category</h1>
        <form action="../../controllers/CategoryController.php" method="post">

            <input type="hidden" name="action" value="delete">
            <label for="id">Category Id:</label><br>
            <input type="number" id="id" name="id"><br>

            <div class="btn">
                <button type="submit">Detele Category</button>
            </div>
        </form>
    </div>
</body>

</html>