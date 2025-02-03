<?php
require_once(__DIR__ . "/../../models/Review.php");

$employee = new Employee();
$review = $employee->getAllReview();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Delete Review</title>
    <link rel="stylesheet" href="../../assets/css/rev_delete_style.css">
</head>

<body>
    <div class="container">
        <<h1>Delete The Reviews</h1>

        <form action="../../controllers/ReviewController.php" method="post">
            <input type="hidden" name="action" value="add"> <br>

            <label for="reviewID">Employee ID:</label>
        <input type="number" id="reviewID" name="reviewID" required 
               placeholder="Delete the review ID"><br><br>

            <div class="btn">
                <button type="submit">Detele</button>
            </div>
        </form>
    </div>
</body>

</html>
