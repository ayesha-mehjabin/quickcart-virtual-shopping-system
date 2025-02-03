<?php
require_once '../models/rev-model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];
    $reviews = new Review(); 
    
    if ($action == 'add') {
        $reviewId = $_POST['reviewID'];
        $rating = $_POST['rating'];
        $comment = $_POST['comment'];
        $reviewDate = $_POST['review_date'];
        $userId = $_POST['user_id'];
        $productId = $_POST['product_id'];

        $reviews->addReview($reviewId, $rating, $comment, $reviewDate, $userId, $productId);
    } elseif ($action == 'delete') {
        $reviewId = $_POST['reviewID']; 

        $reviews->deleteReview($reviewId);
    } elseif ($action == 'update') {
        $reviewId = $_POST['reviewID'];
        $rating = $_POST['rating'];
        $comment = $_POST['comment'];
        $reviewDate = $_POST['review_date'];
        $userId = $_POST['user_id'];
        $productId = $_POST['product_id'];

        $reviews->updateReview($reviewId, $rating, $comment, $reviewDate, $userId, $productId);
    }
}
?>
