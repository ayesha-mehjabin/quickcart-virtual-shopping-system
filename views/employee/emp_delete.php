<!DOCTYPE html>

<html>

<head>
    <title>Employee</title>
    <link rel="stylesheet" href="../../assets/css/emp_delete_style.css">
</head>

<body>
    <div class="container">
        <h1>Delete Employee</h1>
        <form action="../../controllers/EmployeeController.php" method="post">

            <input type="hidden" name="action" value="delete">
            <label for="emp_id">Employee ID:</label>
        <input type="number" id="emp_id" name="emp_id" required 
               placeholder="Enter the employee ID"><br><br>

            <div class="btn">
                <button type="submit">Detele</button>
            </div>
        </form>
    </div>
</body>

</html>