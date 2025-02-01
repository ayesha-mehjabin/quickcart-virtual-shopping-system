<?php
class EmployeeModel {
    private $conn;
 
    public function __construct($db) {
        $this->conn = $db;
    }
 
    // Insert new employee
    public function createEmployee($employee_id, $join_date) {
        $query = "INSERT INTO employee (Employee_ID, Joining_Date) VALUES (?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("isss", $employee_id, $join_date);
        return $stmt->execute();
    }
 
    // Fetch all employees
    public function getEmployees() {
        $query = "SELECT * FROM employee";
        $result = $this->conn->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
 
    // Delete an employee record
    public function deleteEmployee($employee_id) {
        $query = "DELETE FROM employee WHERE Employee_ID = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $employee_id);
        return $stmt->execute();
    }
}
?>
 