<?php
require_once(__DIR__ . '/../config/db.php');

class Login{
    private $conn;
    
    public function connectToDatabase(){
        $database = new Database();
        
        $this->conn = $database->getConnection();
    }
    
    public function addLogin($email, $password){
        $this->connectToDatabase();
        
        $query = 'INSERT INTO login (email,pass) VALUES(?, ?)';
        
        $stmt = $this->conn->prepare($query);
         
        if($stmt){
            
            $stmt->bind_param("ss",$email, $password);
            
            return $stmt->execute();
        } 
    }
}
?>