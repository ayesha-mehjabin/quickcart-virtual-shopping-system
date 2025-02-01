<?php
class SignupModel {
    private $conn;
    private $table = "SIGNUP";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function isUnique($field, $value) {
        $query = "SELECT COUNT(*) AS count FROM " . $this->table . " WHERE $field = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $value);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        return $row['count'] == 0; // Returns true if unique
    }

    public function save($data) {
        $query = "INSERT INTO " . $this->table . " (NAME, EMAIL, PASSWORD, PHONE) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);

        $stmt->bind_param("ssss", $data["name"], $data["email"], $data["password"], $data["phone"]);


        return $stmt->execute();
    }
}
?>
