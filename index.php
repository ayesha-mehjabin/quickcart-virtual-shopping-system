<!DOCTYPE html>
<html lang="en">

<head>
    <title>QuickCart Administration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <!-- Header Section -->
    <div class="header">
        <h1>QuickCart Administration Panel</h1>
        <p>Manage your platform efficiently</p>
    </div>

    <!-- Navigation Bar -->
    <div class="navbar">
        <ul>
            <li><a href="#dashboard">Dashboard</a></li>
            <li><a href="#users">Users</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Product Category</a>
                <div class="dropdown-content">
                    <a href="./views/category/category_add.php">Add Category</a>
                    <a href="./views/category/category_delete.php">Delete Category</a>
                    <a href="./views/category/category_update.php">Update Category</a>
                    <a href="./views/category/category_view.php">View Categories</a>
                </div>
            </li>
            <li><a href="#products">Products</a></li>
            <li><a href="#orders">Orders</a></li>
            <li><a href="#reports">Reports</a></li>
            <li><a href="#settings">Settings</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="container">
        <!-- Left Sidebar -->
        <div class="sidebar">
            <h3>Quick Access</h3>
            <ul>
                <li><a href="#manage-users">Manage Users</a></li>
                <li><a href="#manage-products">Manage Products</a></li>
                <li><a href="#sales-report">Sales Report</a></li>
                <li><a href="#system-settings">System Settings</a></li>
            </ul>
        </div>

        <!-- Main Section -->
        <div class="main-content">
            <h2>Welcome, Administrator</h2>
            <p>Here you can manage the platform, users, products, and much more.</p>

            <h3>Recent Orders</h3>
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#1023</td>
                        <td>John Doe</td>
                        <td>Wireless Earbuds</td>
                        <td>2</td>
                        <td>Shipped</td>
                        <td><button class="btn">View</button></td>
                    </tr>
                    <tr>
                        <td>#1024</td>
                        <td>Jane Smith</td>
                        <td>Smartphone</td>
                        <td>1</td>
                        <td>Pending</td>
                        <td><button class="btn">View</button></td>
                    </tr>
                </tbody>
            </table>

            <h3>Add a New Product</h3>
            <form>
                <label for="product-name">Product Name:</label>
                <input type="text" id="product-name" name="product-name" required>

                <label for="category">Category:</label>
                <select id="category" name="category">
                    <option value="electronics">Electronics</option>
                    <option value="fashion">Fashion</option>
                    <option value="home-appliances">Home Appliances</option>
                </select>

                <label for="price">Price:</label>
                <input type="number" id="price" name="price" required>

                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" required>

                <label for="description">Description:</label>
                <textarea id="description" name="description"></textarea>

                <button type="submit" class="btn">Add Product</button>
            </form>
        </div>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        <p>&copy; 2024 QuickCart. All rights reserved.</p>
    </div>
</body>

</html>