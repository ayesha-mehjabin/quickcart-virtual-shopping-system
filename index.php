<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="./assets/css/style.css?v=1">
</head>

<body>
    <!-- header -->
    <div class="header">
        <h1>QuickCart Administration Panel</h1>
        <p>Manage your platform efficiently</p>
    </div>

    <!-- navigation bar -->
    <div>
        <ul>
            <li class="dropdown">
                <a href="javascript: void(0)">User Roles</a>
                <div class="dropdown-content">
                    <a href="">Add User Role</a>
                    <a href="">Delete User Role</a>
                    <a href="">Update User Role</a>
                    <a href="">View User Roles</a>
                </div>
            </li>

            <li class="dropdown">
                <a href="javascript: void(0)">Users</a>
                <div class="dropdown-content">
                    <a href=".\views\users\users_add.php">Add User</a>
                    <a href=".\views\users\users_delete.php">Delete User</a>
                    <a href=".\views\users\users_update.php">Update User</a>
                    <a href=".\views\users\users_view.php">View Users</a>
                </div>
            </li>

            <li class="dropdown">
                <a href="javascript: void(0)">Product Category</a>
                <div class="dropdown-content">
                    <a href="./views/category/category_add.php">Add Category</a>
                    <a href="./views/category/category_delete.php">Delete Category</a>
                    <a href="./views/category/category_update.php">Update Category</a>
                    <a href="./views/category/category_view.php">View Categories</a>
                </div>
            </li>

            <li class="dropdown">
                <a href=" javascript: void(0)">Products</a>
                <div class="dropdown-content">
                    <a href="./views/product/product_add.php">Add Product</a>
                    <a href="./views/product/product_delete.php">Delete Product</a>
                    <a href="./views/product/product_update.php">Update Product</a>
                    <a href="./views/product/product_delete.php">View Products</a>
                </div>
            </li>

            <li><a href="">Orders</a></li>

            <li class="dropdown">
                <a href=" javascript: void(0)">Employee</a>
                <div class="dropdown-content">
                    <a href="">Add Employee</a>
                    <a href="">Delete Employee</a>
                    <a href="">Update Employee</a>
                    <a href="">View Employees</a>
                </div>
            </li>

            <li class="dropdown">
                <a href=" javascript: void(0)">Reviews</a>
                <div class="dropdown-content">
                    <a href="">Add Reviews</a>
                    <a href="">Delete Reviews</a>
                </div>
            </li>


            <li class="dropdown">
                <a href=" javascript: void(0)">Seller Products</a>
                <div class="dropdown-content">
                    <a href="">Add Seller Product</a>
                    <a href="">Delete Seller Product</a>
                    <a href="">Update Seller Product</a>
                    <a href="">View Seller Product</a>
                </div>
            </li>

            <li class="dropdown">
                <a href=" javascript: void(0)">Profile Verification</a>
                <div class="dropdown-content">
                    <a href=".\views\profileVerification\profileVerification_add.php">New Verification</a>
                    <a href=".\views\profileVerification\profileVerification_delete.php">Delete Wrong Verification</a>
                    <a href=".\views\profileVerification\profileVerification_update.php">Update Verification Status</a>
                    <a href=".\views\profileVerification\profileVerification_view.php">View Verification Status</a>
                </div>
            </li>

            <li class="dropdown">
                <a href=" javascript: void(0)">Payment</a>
                <div class="dropdown-content">
                    <a href="">Update Payment Status</a>
                    <a href="">Delete Wrong Payment Entry</a>
                    <a href="">View Payment List</a>
                </div>
            </li>

            <div class="float-right-btn">
                <li><a href="">Signup/Login</a></li>
            </div>

        </ul>
    </div>

    <div class="cls">

        <h2>QuickCart: Virtual Shopping System</h2>
        <p>
            QuickCart is an innovative virtual shopping system designed to offer a seamless and efficient online shopping experience. This project aims to bridge the gap between sellers and customers by providing a structured and well-organized e-commerce platform. Built using PHP, MySQL, AJAX, and the MVC architecture, QuickCart ensures modularity, scalability, and ease of use.
        </p>

        <p>
            At the core of QuickCart, a robust category and product management system enables administrators and sellers to efficiently organize products into relevant categories. Each product is stored with essential details such as name, description, price, stock availability, image URL, and category association. Customers can explore various product categories, search for specific items, and add them to their cart or wishlist for future purchases.
        </p>

        <p>
            The platform also includes a structured user management system where different roles such as administrators, employees, sellers, and customers have specific privileges. Users must register and verify their profiles before making purchases or managing products. An integrated order management system allows customers to place orders, track their status, and complete payments using different methods. Sellers and administrators can update order statuses, generate reports, and analyze sales trends for better business insights.
        </p>
        <p>
            To enhance performance, AJAX-powered forms have been implemented in various CRUD operations, ensuring real-time updates without requiring full-page reloads. The system maintains user activity logs, profile verification, and admin action tracking to ensure transparency and security. With a structured database schema and optimized queries, QuickCart aims to provide a fast, secure, and user-friendly virtual shopping experience. This project is a stepping stone towards a more scalable, commercial e-commerce solution in the future.
        </p>

    </div>

    <!-- footer -->
    <div class="footer">
        <p>&copy; 2025 www.quickcart.com. All rights reserved.</p>
    </div>

</body>

</html>