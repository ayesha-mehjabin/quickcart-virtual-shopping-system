<?php
require_once '../../models/Category.php'; // Path to the Category.php file
$category = new Category();
$categories = $category->getAllCategories();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Category</title>
    <link rel="stylesheet" href="../../assets/css/category_delete_style.css">
</head>

<body>
    <div class="container">
        <h1>Delete Category</h1>
        <form action="../../controllers/CategoryController.php" method="POST">
            <input type="hidden" name="action" value="delete">
            <label for="id">Category ID:</label>
            <input type="number" id="id" name="id" required>
            <button type="submit">Delete Category</button>
        </form>

        <!-- Table to Show All Categories -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $cat): ?>
                    <tr>
                        <td><?php echo $cat['CategoryID']; ?></td>
                        <td><?php echo $cat['CatName']; ?></td>
                        <td><?php echo $cat['CatDescription']; ?></td>
                        <td>
                            <form action="../../controllers/CategoryController.php" method="POST">
                                <input type="hidden" name="action" value="update">
                                <input type="hidden" name="id" value="<?php echo $cat['CategoryID']; ?>">
                                <button type="submit">Edit</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>