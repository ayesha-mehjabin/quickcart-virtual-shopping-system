<?php
require_once __DIR__ . '/../config/db.php'; // Update the path to point to config folder

class Category {
    private $conn;
    private $table_name = "Categories";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();

        if ($this->conn) {
            echo "Connected successfully!";
        } else {
            echo "Failed to connect to the database.";
        }
    }

    // Fetch all categories
    public function getAllCategories() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Add a new category
    public function addCategory($name, $description) {
        $query = "INSERT INTO " . $this->table_name . " (CatName, CatDescription) VALUES (:name, :description)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        return $stmt->execute();
    }

    // Delete a category
    public function deleteCategory($id) {
        try {
            $query = "DELETE FROM " . $this->table_name . " WHERE CategoryID = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':id', $id);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    // Update a category
    public function updateCategory($id, $name, $description) {
        try {
            $query = "UPDATE " . $this->table_name . " 
                      SET CatName = :name, CatDescription = :description 
                      WHERE CategoryID = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':description', $description);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }    
}
?>
