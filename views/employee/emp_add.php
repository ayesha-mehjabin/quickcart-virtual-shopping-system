
<!DOCTYPE html>
<html>

<head>
    <title>Employee</title>
    <link rel="stylesheet" href="../../assets/css/emp_add_style.css">
</head>

<body>
    <div class="container">
        <h1>Add New Employee</h1>

        <form action="../../controllers/EmployeeController.php" method="post">
            <input type="hidden" name="action" value="add"> <br>
            <label for="emp_id">Employee ID:</label>
        <input type="number" id="emp_id" name="emp_id" required 
               placeholder="Enter the employee ID"><br><br>

        <label for="designation">Designation:</label>
        <select id="designation" name="designation" required>
            <option value="admin">Admin</option>
            <option value="seller">Seller</option>
            <option value="manager">Manager</option>
        </select><br><br>

        <label for="salary">Salary:</label>
        <input type="number" id="salary" name="salary" required 
               placeholder="Enter the salary amount" min="1" step="0.01"><br><br>

        <label for="status">Status:</label>
        <input type="text" id="status" name="status" required 
               placeholder="Enter the employee status"><br><br>

        <label for="joindate">Joining Date:</label>
        <input type="date" id="joindate" name="joindate" required><br><br>
        
               <label for="userid">User ID </label>
        <select id="userid" name="userid" class="dropdown">
            <option value="" disabled selected>-- Select User ID --</option>
                <?php
                foreach ($use as $role)
                {
                    echo "<option value = '" . $role['UserID'] . "'>" . $role['UserID'] .  "</option>";
                }
                ?>  
        </select><br>

            <div class="btn">
                <button type="submit">Add</button>
            </div>
        </form>
    </div>
</body>

</html>