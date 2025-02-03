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
    <script src="../../assets/js/category_add.js"></script>
</head>

<body>
    <div class="container">
        <h1>Add New Category</h1>

        <form action="../../controllers/CategoryController.php" method="post" onsubmit="return validateForm();">
            <input type="hidden" name="action" value="add"> <br>

            <label for="name">Category Name:</label><br>
            <input type="text" id="name" name="name" onchange="showInputChange()">
            <p id="changeMessage"></p>
            <br>

            <label for="description">Description:</label><br>
            <textarea id="description" name="description" rows="4" onkeydown="characterCount()"></textarea>
            <p id="characterCounter"></p>
            <br>

            <div class="btn">
                <button type="submit" onclick="changeBgColor()">Add Category</button>
            </div>

        </form>
    </div>
</body>

</html>