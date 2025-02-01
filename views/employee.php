<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "../controller/emp-controller.php";
    $controller = new emp-controller();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Employee</title>
</head>
<body>
    <form action="emp-controller.php" method="post"> 
        <h1>Employee Details</h1>

        <label for="employee-id">Employee ID:</label>
        <input type="number" id="employee-id" name="employee-id" required><br><br>

        <label for="joindate">Joining Date:</label>
        <input type="date" id="joindate" name="joindate" required><br><br>

        <label for="department">Department:</label>
        <select id="department" name="department" required>
            <option value="Product">Product</option>
            <option value="Order">Order</option>
            <option value="Customer">Customer Manage</option>
        </select><br><br>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="Manager">Manager</option>
            <option value="Sell">Sell</option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
