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
    <title>Update Category</title>
    <link rel="stylesheet" href="../../assets/css/category_update_style.css">
</head>

<body>
    <div class="container">
        <h1>Update Category</h1>
        <form action="../../controllers/CategoryController.php" method="POST">
            <input type="hidden" name="action" value="update">

            <label for="id">Category ID:</label>
            <input type="number" id="id" name="id" placeholder="Enter Category ID" required>

            <label for="name">New Category Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter New Category Name" required>

            <label for="description">New Description:</label>
            <textarea id="description" name="description" rows="4" placeholder="Enter New Description" required></textarea>

            <button type="submit">Update Category</button>
        </form>

        <!-- Example Table for Categories -->
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