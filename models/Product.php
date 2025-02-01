<?php
require_once(__DIR__ . '/../config/db.php');

class Product
{

    private $conn;

    public function connectToDatabase()
    {
        $database = new Database();

        $this->conn = $database->getConnection();
    }

    public function addProduct($name, $description, $quantity, $price, $img, $category)
    {
        $this->connectToDatabase();

        $query = 'INSERT INTO products (ProName, ProDescription, ProStock, ProPrice, ProImageURL, CategoryID) VALUES(?, ?, ?, ?, ?, ?)';

        $stmt = $this->conn->prepare($query);

        if ($stmt) {
            $stmt->bind_param("ssidsi", $name, $description, $quantity, $price, $img, $category);

            return $stmt->execute();
        }
    }

    public function deleteProduct($id)
    {
        $this->connectToDatabase();

        $query = 'DELETE FROM products WHERE ProductID = ?';

        $stmt = $this->conn->prepare($query);

        if ($stmt) {

            $stmt->bind_param("i", $id);

            return $stmt->execute();
        }
    }

    public function updateProduct($id, $name, $description, $quantity, $img, $price, $category)
    {
        $this->connectToDatabase();

        $query = 'UPDATE products SET ProName = ?, ProDescription = ?, ProStock = ?, ProPrice = ?, ProImageURL = ?, CategoryID = ? WHERE ProductID = ?';
        $stmt = $this->conn->prepare($query);

        if($stmt){
            $stmt->bind_param("ssdisii", $name, $description, $quantity, $price, $img, $category, $id);

            return $stmt->execute();
        }

    }

    public function getAllProducts(){
        $this->connectToDatabase();

        $query = 'SELECT * FROM products';
        $stmt = $this->conn->prepare($query);

        if($stmt)
        {
            $stmt->execute();
            $result = $stmt->get_result();

            if($result && $result->num_rows > 0)
            {
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            else{
                return [];
            }
        }

    }
}
?>