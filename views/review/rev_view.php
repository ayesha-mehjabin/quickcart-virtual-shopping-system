<?php
require_once(__DIR__ . "/../../models/Review.php");

$employee = new Employee();
$review = $employee->getAllReview();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Update Review</title>
    <link rel="stylesheet" href="../../assets/css/rev_view_style.css">
</head>
<body>
    <div class="container">
        <h1>Review</h1>
        <table>
            <thead>
                <tr>
                    <th>Review ID</th>
                    <th>Rating</th>
                    <th>Comment</th>
                    <th>Review Date</th>
                    <th>User ID</th>
                    <th>Product ID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($review as $rev):
                ?>
                    <tr>
                        <td><?php echo $rev['ReviewID']; ?></td>
                        <td><?php echo $rev['Rating']; ?></td>
                        <td><?php echo $rev['Comment']; ?></td>
                        <td><?php echo $rev['ReviewDate']; ?></td>
                        <td><?php echo $rev['UserID']; ?></td>
                        <td><?php echo $rev['ProductID']; ?></td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>