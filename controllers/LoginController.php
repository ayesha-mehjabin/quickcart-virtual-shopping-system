<?php
require_once __DIR__ . "/../../config/database.php";
require_once __DIR__ . "/../models/LoginModel.php";  // Updated to use LoginModel

class LoginController {
    private $db;
    private $model;

    public function __construct() {
        $database = new Database();
        $this->db = $database->connect();
        $this->model = new LoginModel($this->db); // Using LoginModel
    }

    public function login() {
        $errors = [];
        $success = "";

        // Get form data
        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);

        // Validate input
        if (empty($email) || empty($password)) {
            $errors[] = "All fields are required.";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        }

        // Proceed if no validation errors
        if (empty($errors)) {
            // Check credentials via LoginModel
            $response = $this->model->checkLogin($email, $password);

            if ($response["status"] === "success") {
                $success = $response["message"];
            } else {
                $errors[] = $response["message"];
            }
        }

        return ["errors" => $errors, "success" => $success];
    }
}
?>
