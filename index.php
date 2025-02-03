<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="./assets/css/style.css">
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
                    <a href="">Add Category</a>
                    <a href="">Delete Category</a>
                    <a href="">Update Category</a>
                    <a href="">View Categories</a>
                </div>
            </li>

            <li class="dropdown">
                <a href=" javascript: void(0)">Products</a>
                <div class="dropdown-content">
                    <a href="">Add Product</a>
                    <a href="">Delete Product</a>
                    <a href="">Update Product</a>
                    <a href="">View Products</a>
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

    <!-- footer -->
    <div class="footer">
        <p>&copy; 2025 www.quickcart.com. All rights reserved.</p>
    </div>

</body>

</html>