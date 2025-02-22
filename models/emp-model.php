<?php
require_once(__DIR__ . '/../config/db.php');

class Employee
{
    private $conn;

    public function connectToDatabase()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function addEmployee($emp_id, $designation, $salary, $status, $join_date, $userid)
    {
        $this->connectToDatabase();

        $query = 'INSERT INTO employees (EmployeeID, Designation, Salary, Status, JoinDate, UserID) 
                  VALUES (?, ?, ?, ?, ?, ?)';

        $stmt = $this->conn->prepare($query);

        if ($stmt) {
            $stmt->bind_param("issdsi", $emp_id, $designation, $salary, $status, $join_date, $userid);
            return $stmt->execute();
        }
        return $stmt->execute();
    }

    public function deleteEmployee($emp_id)
    {
        $this->connectToDatabase();

        $query = 'DELETE FROM employees WHERE EmployeeID = ?';
        $stmt = $this->conn->prepare($query);

        if ($stmt) {
            $stmt->bind_param("i", $emp_id);
            return $stmt->execute();
        }
        return $stmt->execute();
    }

    public function updateEmployee($emp_id, $designation, $salary, $status, $join_date, $userid)
    {
        $this->connectToDatabase();

        $query = 'UPDATE employees SET Designation = ?, Salary = ?, Status = ?, JoinDate = ?, UserID = ? WHERE EmployeeID = ?';
        $stmt = $this->conn->prepare($query);

        if ($stmt) {
            $stmt->bind_param("ssdsi", $designation, $salary, $status, $join_date, $userid, $emp_id);
            return $stmt->execute();
        }
        return $stmt->execute();
    }

    public function getAllEmployee()
    {
        $this->connectToDatabase();

        $query = 'SELECT * FROM employees';
        $stmt = $this->conn->prepare($query);

        if ($stmt) {
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result && $result->num_rows > 0) {
                return $result->fetch_all(MYSQLI_ASSOC);
            }
        }
        return [];
    }
}
?>
