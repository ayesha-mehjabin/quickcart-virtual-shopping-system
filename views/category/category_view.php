<?php
require_once(__DIR__ . "/../../models/Category.php");

$category = new Category();
$categories = $category->getAllCategories();
?>

<!DOCTYPE>
<html>

<head>
    <title>View Category</title>
    <link rel="stylesheet" href="../../assets/css/category_view_style.css">
</head>

<body>
    <div class="container">
        <h1>Available Categories</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Category Description</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($categories as $cat):
                ?>
                    <tr>
                        <td><?php echo $cat['CategoryID']; ?></td>
                        <td><?php echo $cat['CatName']; ?></td>
                        <td><?php echo $cat['CatDescription']; ?></td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>