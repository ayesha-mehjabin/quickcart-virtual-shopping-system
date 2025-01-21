<?php
class Database {
    private $host = "localhost";
    private $db_name = "quickcart";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>










<?php
// class Database {
//     private $dsn = "mysql:host=localhost;dbname=quickcart";
//     private $username = "root";
//     private $password = "";

//     public function getConnection() {
//         try {
//             return new PDO($this->dsn, $this->username, $this->password);
//         } catch (PDOException $exception) {
//             die("Connection error: " . $exception->getMessage());
//         }
//     }
// }
?>

