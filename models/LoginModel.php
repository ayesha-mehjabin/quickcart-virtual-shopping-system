<?php
class LoginModel {
    private $conn;
    private $table = "SIGNUP";

    public function __construct($db) {
        $this->conn = $db;
    }

    // Check login credentials (email and password)
    public function checkLogin($email, $password) {
        // Query to get the user details by email
        $query = "SELECT * FROM " . $this->table . " WHERE EMAIL = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // If user is found
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Compare the password (plain text comparison)
            if ($user["PASSWORD"] === $password) {
                return [
                    "status" => "success",
                    "message" => "Login successful! Welcome, " . $user["NAME"]
                ];
            } else {
                return [
                    "status" => "error",
                    "message" => "Invalid password."
                ];
            }
        } else {
            return [
                "status" => "error",
                "message" => "Email not found."
            ];
        }
    }
}
?>
