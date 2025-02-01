<?php

class cart {
    private $conn;

    function openCon() {
        $dbhost = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "user";

        $this->conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }

        return $this->conn;
    }

    function addUser( $fname, $lname, $phone, $address, $rname, $rid) {
        $conn = $this->openCon();
        $sql = "INSERT INTO user (first_name, last_name, phone, address, role_name, role_id) VALUES (?, ?, ?, ?, ?, ?)";
        
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            return "Error in preparing statement: " . $conn->error;
        }

        $stmt->bind_param("ssissi", $fname, $lname, $phone, $address, $rname, $rid);
        
        if ($stmt->execute()) {
            $stmt->close();
            return "User added successfully!";
        } else {
            return "Error: " . $stmt->error;
        }
    }

    function closeCon() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}

?>
