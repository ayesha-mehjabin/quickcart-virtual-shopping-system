<?php
require_once(__DIR__ . '/../config/db.php');

class Review
{
    private $conn;

    public function connectToDatabase()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function addReview($reviewID, $rate, $comment, $reviewDate, $userid, $productId)
    {
        $this->connectToDatabase();

        $query = 'INSERT INTO reviews (ReviewID, Rating, Comment, ReviewDate, UserID, ProductID) 
                  VALUES (?, ?, ?, ?, ?, ?)';

        $stmt = $this->conn->prepare($query);

        if ($stmt) {
            $stmt->bind_param("iissii", $reviewID, $rate, $comment, $reviewDate, $userid, $productId);
            return $stmt->execute();
        }
        return $stmt->execute();
    }

    public function deleteReview($reviewID)
    {
        $this->connectToDatabase();

        $query = 'DELETE FROM reviews WHERE ReviewID = ?';
        $stmt = $this->conn->prepare($query);

        if ($stmt) {
            $stmt->bind_param("i", $reviewID);
            return $stmt->execute();
        }
        return $stmt->execute();
    }

    public function updateReview($reviewID, $rate, $comment, $reviewDate, $userid, $productId)
    {
        $this->connectToDatabase();

        $query = 'UPDATE reviews SET Rating = ?, Comment = ?, ReviewDate = ?, UserID = ?, ProductID = ? WHERE ReviewID = ?';
        $stmt = $this->conn->prepare($query);

        if ($stmt) {
            $stmt->bind_param("issiii", $rate, $comment, $reviewDate, $userid, $productId, $reviewID);
            return $stmt->execute();
        }
        return $stmt->execute();
    }

    public function getAllReview()
    {
        $this->connectToDatabase();

        $query = 'SELECT * FROM reviews';
        $stmt = $this->conn->prepare($query);

        if ($stmt) {
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result && $result->num_rows > 0) {
                return $result->fetch_all(MYSQLI_ASSOC);
            }
        }
        return [];
    }
}
?>
