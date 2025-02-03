<?php
require_once(__DIR__ . "./../models/ProductOrderForm.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $action = $_POST['action'];
    $productOrder = new ProductOrderForm();

    if ($action == 'placeOrder') {
        $user_id = $_POST["user_id"];
        $product_id = $_POST["product_id"];
        $quantity = $_POST["quantity"];
        $district = $_POST["district"];
        $subdistrict = $_POST["subdistrict"];
        $area = $_POST["area"];
        $postal_code = $_POST["postal_code"];
        $payment_method = $_POST["payment_method"];

        $productOrder->placeOrder($user_id, $product_id, $quantity, $district, $subdistrict, $area, $postal_code, $payment_method);
    }
}
?>
