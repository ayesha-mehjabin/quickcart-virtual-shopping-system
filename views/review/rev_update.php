<?php
require_once(__DIR__ . "/../../models/Review.php");

$employee = new Employee();
$review = $employee->getAllReview();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Update Review</title>
    <link rel="stylesheet" href="../../assets/css/rev_update_style.css">
</head>

<body>
    <div class="container">
        <<h1>Update The Reviews</h1>

        <form action="../../controllers/ReviewController.php" method="post">
            <input type="hidden" name="action" value="add"> <br>
            
                <lable for="reviewID">Review ID:</lable>
                <input type="number"name="reviewID"name="reviewID"><br><br>

     <h4 text=>Reting :</h4><br><br>
    
                    <td><input type="radio" id="html" name="rate" value="5-star">
                    <label for="5-star">5 Star</label><br>
                    <input type="radio" id="4-star" name="rate" value="4-star">
                    <label for="4-star">4 Star</label><br>
                    <input type="radio" id="3-star" name="rate" value="3-star">
                    <label for="3-star">3 Star</label><br>
                    <input type="radio" id="2-star" name="rate" value="2-star">
                    <label for="2-star">2 Star</label><br>
                    <input type="radio" id="1-star" name="rate" value="1-star">
                    <label for="1-star">1 Star</label><br><br>

                    <lable for="comment">Comment:</lable>
                    <textarea rows="4" cols="50" name="review"></textarea><br><br>

                    <label for="review_date">Review Date:</label>
                    <input type="date" id="review_date" name="review_date" required><br><br>

                    <label for="userid">User ID </label>
        <select id="userid" name="userid" class="dropdown">
            <option value="" disabled selected>-- Select User ID --</option>
                <?php
                foreach ($use as $role)
                {
                    echo "<option value = '" . $role['UserID'] . "'>" . $role['UserID'] .  "</option>";
                }
                ?>  
        </select><br><br>
 
                    <lable for="product_id">Product ID:</lable>
                    <input type="number"name="product_id"name="product_id"><br><br>


                    <div class="btn">
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
</body>

</html>