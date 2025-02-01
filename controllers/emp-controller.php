<?php
require_once __DIR__ . "/../../config/database.php"; // Correct path to database.php
require_once __DIR__ . "/../models/emp-model.php"; // Correct path to emp-model.php
 
class EmpController {
    private $db;
    private $model;
 
    public function __construct() {
        $database = new Database();
        $this->db = $database->connect();
        $this->model = new emp-model($this->db);
    }
 
    public function addEmployee() {
        $errors = [];
 
        // Form Data
        $employee_id = trim($_POST["employee_id"]);
        $join_date = trim($_POST["joindate"]);
 
        // Validation
        if (empty($employee_id) || empty($join_date)) {
            $errors[] = "All fields are required.";
        }
        if (!$this->model->isUnique("EMPLOYEE_ID", $employee_id)) {
            $errors[] = "Employee ID already exists.";
        }
 
        // If no errors, save data
        if (empty($errors)) {
            $data = [
                "employee_id" => $employee_id,
                "join_date" => $join_date,
            ];
            if ($this->model->save($data)) {
                echo "✅ Employee added successfully!";
            } else {
                $errors[] = "❌ Error adding employee. Please try again.";
            }
        }
 
        return $errors;
    }
 
    public function deleteEmployee() {
        if (isset($_GET["employee_id"])) {
            $employee_id = $_GET["employee_id"];
            if ($this->model->delete($employee_id)) {
                echo "✅ Employee deleted successfully!";
                header("Location: employee.php"); // Redirect after delete
            } else {
                echo "❌ Error deleting employee. Please try again.";
            }
        }
    }
}
?>