<?php
require_once(__DIR__ . '/../config/db.php');

class Userroles{
    private $conn;
    
    public function connectToDatabase(){
        $database = new Database();
        
        $this->conn = $database->getConnection();
    }
    
    public function addUserroles($rolename){
        $this->connectToDatabase();
        
        $query = 'INSERT INTO userroles (RoleName) VALUES(?)';
        
        $stmt = $this->conn->prepare($query);
         
        if($stmt){
            
            $stmt->bind_param("s", $rolename);
            
            return $stmt->execute();
        } 
    }

    public function getAllUserroles(){
        $this->connectToDatabase();

        $query = 'SELECT * FROM userroles';
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