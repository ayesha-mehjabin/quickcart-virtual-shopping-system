<!DOCTYPE html>
<html>

<head>
    <title>Delete Product</title>
    <link rel="stylesheet" href="../../assets/css/product_delete_style.css">
</head>

<body>
    <div class="container">
        <h1>Delete Product</h1>
        <form action="../../controllers/ProductController.php" method="post">
            <input type="hidden" name="action" value="delete">

            <label for="id">Product ID:</label><br>
            <input type="number" id="id" name="id"><br>
            <div class="btn">
                <button type="submit">Yes, Delete</button>
                <button type="reset">Cancel</button>
            </div>
        </form>
    </div>
</body>

</html>