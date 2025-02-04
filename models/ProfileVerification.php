<?php
require_once(__DIR__ . '/../config/db.php');

class profileVerification{
    private $conn;
    
    public function connectToDatabase(){
        $database = new Database();
        
        $this->conn = $database->getConnection();
    }
    
    public function addprofileVerification($userid, $status, $verificationdate){
        $this->connectToDatabase();
        
        $query = 'INSERT INTO profileverification (UserID, Status, VerificationDate) VALUES(?, ?, ?)';
        
        $stmt = $this->conn->prepare($query);
         
        if($stmt){
            
            $stmt->bind_param("iss", $userid, $status, $verificationdate);
            
            return $stmt->execute();
        } 
    }

    public function deleteprofileVerification($verificationid){
        $this->connectToDatabase();

        $query = 'DELETE FROM profileverification WHERE verificationid = ?';

        $stmt = $this->conn->prepare($query);

        if($stmt){

            $stmt->bind_param("i", $verificationid);

            return $stmt->execute();
        }
    }

    public function updateprofileVerification($userid, $status, $verificationid, $verificationdate){
        $this->connectToDatabase();

        $query = 'UPDATE profileverification SET UserID = ?, Status = ?, VerificationDate = ? WHERE verificationid = ?';
        
        $stmt = $this->conn->prepare($query);

        if($stmt){
            $stmt->bind_param("isis", $userid, $status, $verificationid, $verificationdate);

            return $stmt->execute();
        }
    }

    public function getAllProfileVerification(){
        $this->connectToDatabase();

        $query = 'SELECT * FROM profileverification';
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