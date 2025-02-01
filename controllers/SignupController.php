<?php
require_once __DIR__ . "/../../config/database.php"; // Correct path to database.php
require_once __DIR__ . "/../models/SignupModel.php"; // Correct path to SignupModel.php

class SignupController {
    private $db;
    private $model;

    public function __construct() {
        $database = new Database();
        $this->db = $database->connect();
        $this->model = new SignupModel($this->db);
    }

    public function register() {
        $errors = [];

        // Form Data
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);
        $phone = trim($_POST["phone"]);

        // Validation
        if (empty($name) || empty($email) || empty($password) || empty($phone)) {
            $errors[] = "All fields are required.";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        }
        if (!preg_match('/^\d{11}$/', $phone)) {
            $errors[] = "Phone number must be 11 digits.";
        }
        if (!$this->model->isUnique("EMAIL", $email)) {
            $errors[] = "Email is already registered.";
        }
        if (!$this->model->isUnique("PHONE", $phone)) {
            $errors[] = "Phone number is already registered.";
        }

        // If no errors, save data
        if (empty($errors)) {
            $data = [
                "name" => $name,
                "email" => $email,
                "password" => $password,
                "phone" => $phone,
            ];
            if ($this->model->save($data)) {
                echo "Signup successful!";
            } else {
                $errors[] = "Failed to register. Please try again.";
            }
        }

        return $errors;
    }
}
?>
