<?php
require_once(__DIR__ . "/../../models/SellerProduct.php");

$sellProduct = new SellProduct();
$sellProduct = $sellProduct->getAllSellProduct();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Seller Product</title>
    <link rel="stylesheet" href="../../assets/css/sellp_add_style.css">
</head>

<body>
    <div class="container">
        <h1>Add Sell Product</h1>

        <form action="../../controllers/SellProductController.php" method="post">
            <input type="hidden" name="action" value="add"> <br>

            <label for="selpro_id">Sellproduct ID:</label>
        <input type="number" id="selpro_id" name="selpro_id" required 
               placeholder="Enter the employee ID"><br><br>

        <label for="selpro_date">Sellproduct Date:</label>
        <input type="date" id="selpro_date" name="selpro_date" required><br><br>

        <label for="userid">User ID </label>
        <select id="userid" name="userid" class="dropdown">
            <option value="" disabled selected>-- Select User ID --</option>
                <?php
                foreach ($use as $role)
                {
                    echo "<option value = '" . $role['UserID'] . "'>" . $role['UserID'] .  "</option>";
                }
                ?>  
        </select><br>
            <div class="btn">
                <button type="submit">Add </button>
            </div>
        </form>
    </div>
</body>

</html>