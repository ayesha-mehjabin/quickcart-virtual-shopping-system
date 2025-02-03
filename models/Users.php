<?php
require_once(__DIR__ . '/../config/db.php');

class Users{
    private $conn;
    
    public function connectToDatabase(){
        $database = new Database();
        
        $this->conn = $database->getConnection();
    }
    
    public function addUsers($fname, $lname, $email, $password, $phone, $district, $subdistrict, $area, $postalcode, $registrationdate, $roleid){
        $this->connectToDatabase();
        
        $query = 'INSERT INTO users (FirstName, Last_Name, Email, Password, Phone, District, Subdistrict, AREA, PostalCode, RegistrationDate, RoleID) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        
        $stmt = $this->conn->prepare($query);
         
        if($stmt){
            
            $stmt->bind_param("sssiisssisi", $fname, $lname, $email, $password, $phone, $district, $subdistrict, $area, $postalcode, $registrationdate, $roleid);
            
            return $stmt->execute();
        } 
    }

    public function deleteUsers($userid){
        $this->connectToDatabase();

        $query = 'DELETE FROM users WHERE UserID = ?';

        $stmt = $this->conn->prepare($query);

        if($stmt){

            $stmt->bind_param("i", $userid);

            return $stmt->execute();
        }
    }

    public function updateUsers($userid, $fname, $lname, $email, $password, $phone, $district, $subdistrict, $area, $postalcode, $registrationdate, $roleid){
        $this->connectToDatabase();

        $query = 'UPDATE users SET FirstName = ?, Last_Name = ?, Email = ?, Password = ?, Phone = ?, District = ?, Subdistrict = ?, AREA = ?, PostalCode = ?, RegistrationDate = ?, RoleID = ?, WHERE UserID = ?';
        
        $stmt = $this->conn->prepare($query);

        if($stmt){
            $stmt->bind_param("sssiisssisi", $fname, $lname, $email, $password, $phone, $district, $subdistrict, $area, $postalcode, $registrationdate, $roleid);

            return $stmt->execute();
        }
    }

    public function getAllUsers(){
        $this->connectToDatabase();

        $query = 'SELECT * FROM users';
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