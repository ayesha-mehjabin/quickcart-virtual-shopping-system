
<!DOCTYPE html>

<html>

<head>
    <title>Update Employee</title>
    <link rel="stylesheet" href="../../assets/css/emp_update_style.css">
</head>

<body>
    <div class="container">
        <h1>Update Employee</h1>
        <form action="../../controllers/EmployeeController.php" method="post">

            <input type="hidden" name="action" value="delete">
            <label for="emp_id">Employee ID:</label>
        <input type="number" id="emp_id" name="emp_id" required 
               placeholder="Enter new employee ID"><br>

        <label for="designation">Designation:</label><br>

        <select id="designation" name="designation" class="dropdown" 
        placeholder="Enter New designation">
            <option value="admin">Admin</option>
            <option value="seller">Seller</option>
            <option value="manager">Manager</option>
        </select><br>

        <label for="salary">Salary:</label>
        <input type="number" id="salary" name="salary" required 
               placeholder="Enter New salary amount" min="1" step="0.01"><br>

        <label for="status">Status:</label>
        <input type="text" id="status" name="status" required 
               placeholder="Enter New employee status"><br>

        <label for="joindate">Joining Date:</label>
        <div class ="dropdown">
        <input type="date" id="joindate" name="joindate" required 
        placeholder="Enter new joining date"><br></div>

            <div class="btn">
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
</body>

</html>