<?php
class Database
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "quickcart";
    public $conn;

    public function getConnection()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    
        if($this->conn->connect_error)
        {
            die("connection failed: " . $this->conn->connect_error);
        } else {
            echo "Connected successfully.";
        }

        return $this->conn;
    }
}
?>