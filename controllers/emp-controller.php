<?php
require_once '../models/emp-model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];
    $employees = new Employee(); 
    
    if ($action == 'add') {
        $emp_id = $_POST['emp_id'];
        $designation = $_POST['designation'];
        $salary = $_POST['salary'];
        $status = $_POST['status'];
        $join_date = $_POST['joindate'];
        $userid = $_POST['userid'];

        $employees->addEmployee($emp_id, $designation, $salary, $status, $join_date, $userid);
    } elseif ($action == 'delete') {
        $emp_id = $_POST['emp_id'];

        $employees->deleteEmployee($emp_id);
    } elseif ($action == 'update') {
        
        $emp_id = $_POST['emp_id']; 
        $designation = $_POST['designation'];
        $salary = $_POST['salary'];
        $status = $_POST['status'];
        $join_date = $_POST['joindate'];
        $userid = $_POST['userid'];

        $employee->updateEmployee($emp_id, $designation, $salary, $status, $join_date, $userid);
    }
}
?>
