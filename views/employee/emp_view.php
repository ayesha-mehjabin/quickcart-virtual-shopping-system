<!DOCTYPE html>

<html>

<head>
    <title>Employee</title>
    <link rel="stylesheet" href="../../assets/css/emp_view_style.css">
</head>

<body>
    <div class="container">
        <h1>Employee Details</h1>
        <table>
            <thead>
                <tr>
                    <th>Employee ID</th>
                    <th>Designation</th>
                    <th>Salary</th>
                    <th>Status</th>
                    <th>Joining Date</th>
                    <th>User ID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($employee as $emp):
                ?>
                    <tr>
                        <td><?php echo $emp['EmployeeID']; ?></td>
                        <td><?php echo $emp['Designation']; ?></td>
                        <td><?php echo $emp['Salary']; ?></td>
                        <td><?php echo $emp['Status']; ?></td>
                        <td><?php echo $emp['JoinDate']; ?></td>
                        <td><?php echo $emp['UserID']; ?></td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>