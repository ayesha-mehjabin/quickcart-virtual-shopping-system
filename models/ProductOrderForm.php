<?php
require_once(__DIR__ . '/../config/db.php');

class ProductOrderForm
{
    private $conn;

    public function connectToDatabase()
    {
        $database = new Database();

        $this->conn = $database->getConnection();
    }

    public function placeOrder($user_id, $product_id, $quantity, $district, $subdistrict, $area, $postal_code, $payment_method)
    {
        $this->connectToDatabase();

        $product_price = "";
        $query = "SELECT ProPrice FROM Products WHERE ProductID = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $product_id);
        $stmt->execute();
        $stmt->bind_result($product_price);
        $stmt->fetch();
        $stmt->close();

        $product_price = $product_price * $quantity;

        $query = 'INSERT INTO Orders (PaymentMethod, District, Subdistrict, AREA, PostalCode, TotalAmount, UserID) 
                                    VALUES (?, ?, ?, ?, ?, ?, ?)';

        $stmt = $this->conn->prepare($query);

        if ($stmt) {

            $stmt->bind_param("ssssidi", $payment_method, $district, $subdistrict, $area, $postal_code, $product_price, $user_id);

            return $stmt->execute();
        }
    }
}
