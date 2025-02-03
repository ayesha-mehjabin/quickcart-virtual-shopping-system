<?php
require_once(__DIR__ . '/../config/db.php');

class SellerProduct
{
    private $conn;

    public function connectToDatabase()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function addSellerProduct($selpro_id, $selpro_date, $productid, $userid)
    {
        $this->connectToDatabase();

        $query = 'INSERT INTO sellerproducts (SelProID, SelProAddedDate, ProductID, UserID) 
                  VALUES (?, ?, ?, ?)';

        $stmt = $this->conn->prepare($query);

        if ($stmt) {
            $stmt->bind_param("issi", $selpro_id, $selpro_date, $productid, $userid);
            return $stmt->execute();
        }
        return $stmt->execute();
    }

    public function deleteSellerProduct($SelProID)
    {
        $this->connectToDatabase();

        $query = 'DELETE FROM sellerproducts WHERE SelProID = ?';
        $stmt = $this->conn->prepare($query);

        if ($stmt) {
            $stmt->bind_param("i", $SelProID);
            return $stmt->execute();
        }
        return $stmt->execute();
    }

    public function updateSellerProduct($selpro_id, $selpro_date, $productid, $userid)
    {
        $this->connectToDatabase();

        $query = 'UPDATE sellerproducts SET SelProAddedDate = ?, ProductID = ?, UserID = ? WHERE SelProID = ?';
        $stmt = $this->conn->prepare($query);

        if ($stmt) {
            $stmt->bind_param("siii", $selpro_date, $productid, $userid, $selpro_id);
            return $stmt->execute();
        }
        return $stmt->execute();
    }

    public function getAllSellerProduct()
    {
        $this->connectToDatabase();

        $query = 'SELECT * FROM sellerproducts';
        $stmt = $this->conn->prepare($query);

        if ($stmt) {
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result && $result->num_rows > 0) {
                return $result->fetch_all(MYSQLI_ASSOC);
            }
        }
        return [];
    }
}
?>
