<?php
require_once(__DIR__ . '/../config/db.php');
 
class Payment
{
    private $conn;
 
    public function connectToDatabase()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
 
        if (!$this->conn) {
            die("Database connection failed: " . mysqli_connect_error());
        }
    }
 
    public function addPayment($PaymentID, $PaymentMethod, $PaymentStatus, $PaymentDate, $Amount, $OrderID)
    {
        $this->connectToDatabase();
 
        $query = 'INSERT INTO payment (PaymentID, PaymentMethod, PaymentStatus, PaymentDate, Amount, OrderID) VALUES(?, ?, ?, ?, ?, ?)';
 
        $stmt = $this->conn->prepare($query);
 
        if ($stmt === false) {
            die("Prepare failed: " . $this->conn->error);
        }
 
        $stmt->bind_param("isssdi", $PaymentID, $PaymentMethod, $PaymentStatus, $PaymentDate, $Amount, $OrderID);
 
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } else {
            die("Execute failed: " . $stmt->error);
        }
 
        $stmt->close();
    }
    public function deletePayment($PaymentID)
    {
        $this->connectToDatabase();

        $query = 'DELETE FROM products WHERE PaymentID = ?';

        $stmt = $this->conn->prepare($query);

        if ($stmt) {

            $stmt->bind_param("i", $PaymentID);

            return $stmt->execute();
        }
    }
    public function updatePayment($PaymentID, $PaymentMethod, $PaymentStatus, $PaymentDate, $Amount, $OrderID)
    {
        $this->connectToDatabase();

        $query = 'UPDATE payment SET PaymentID = ?, PaymentMethod = ?, PaymentStatus = ?,PaymentDate = ?, Amount = ?, OrderID = ? WHERE PaymentID = ?';
        $stmt = $this->conn->prepare($query);

        if($stmt){
            $stmt->bind_param("isssdi", $PaymentID, $PaymentMethod, $PaymentStatus, $PaymentDate, $Amount, $OrderID);

            return $stmt->execute();
        }

    }
}
?>