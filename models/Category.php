<?php
require_once(__DIR__ . '/../config/db.php');

class Category{
    private $conn;
    
    public function connectToDatabase(){
        $database = new Database();
        
        $this->conn = $database->getConnection();
    }
    
    public function addCategory($name, $description){
        $this->connectToDatabase();
        
        $query = 'INSERT INTO categories (CatName, CatDescription) VALUES(?, ?)';
        
        $stmt = $this->conn->prepare($query);
         
        if($stmt){
            
            $stmt->bind_param("ss", $name, $description);
            
            return $stmt->execute();
        } 
    }

    public function deleteCategory($id){
        $this->connectToDatabase();

        $query = 'DELETE FROM categories WHERE CategoryID = ?';

        $stmt = $this->conn->prepare($query);

        if($stmt){

            $stmt->bind_param("i", $id);

            return $stmt->execute();
        }
    }

    public function updateCategory($id, $name, $description){
        $this->connectToDatabase();

        $query = 'UPDATE categories SET CatName = ?, CatDescription = ? WHERE CategoryID = ?';
        
        $stmt = $this->conn->prepare($query);

        if($stmt){
            $stmt->bind_param("ssi", $name, $description, $id);

            return $stmt->execute();
        }
    }

    public function getAllCategories(){
        $this->connectToDatabase();

        $query = 'SELECT * FROM categories';
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