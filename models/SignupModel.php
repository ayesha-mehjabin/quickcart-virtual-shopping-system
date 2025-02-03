<?php
require_once(__DIR__ . '/../config/db.php');

class Signup{
    private $conn;
    
    public function connectToDatabase(){
        $database = new Database();
        
        $this->conn = $database->getConnection();
    }
    
    public function addSignup($fname, $lname, $email, $password, $phone){
        $this->connectToDatabase();
        
        $query = 'INSERT INTO signup (fname,lname,email,pass,phone) VALUES(?, ?,?,?,?)';
        
        $stmt = $this->conn->prepare($query);
         
        if($stmt){
            
            $stmt->bind_param("ssssi", $fname, $lname, $email, $password, $phone);
            
            return $stmt->execute();
        } 
    }
}
?>