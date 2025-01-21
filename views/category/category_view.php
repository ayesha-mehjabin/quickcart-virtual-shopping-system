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
    <title>Add Category</title>
    <link rel="stylesheet" href="../../assets/css/category_view_style.css">
</head>

<body>
    <div class="container">
        <h1>Add New Category</h1>
        <form action="../../controllers/CategoryController.php" method="POST">
            <input type="hidden" name="action" value="add">
            <label for="name">Category Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <button type="submit">Add Category</button>
        </form>

        <!-- Table to Show Categories -->
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
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="id" value="<?php echo $cat['CategoryID']; ?>">
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>