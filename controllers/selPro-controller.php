<?php
require_once '../model/selPro-model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];
    $sellerproducts = new SellerProduct(); 
    
    if ($action == 'add') {
        $selpro_id = $_POST['selpro_id']; 
        $selpro_date = $_POST['selpro_date'];
        $userid = $_POST['userid'];
        $productId = $_POST['product_id']; 
        
        $sellerproducts->addSellerProduct($selpro_id, $selpro_date, $productId, $userid);
    } 
    elseif ($action == 'delete') {
        $selpro_id = $_POST['selpro_id'];
        $sellerproducts->deleteSellerProduct($selpro_id);
    } 
    elseif ($action == 'update') {
        $selpro_id = $_POST['selpro_id'];
        $selpro_date = $_POST['selpro_date'];
        $userid = $_POST['userid'];
        $productId = $_POST['product_id']; 
        
        $sellerproducts->updateSellerProduct($selpro_id, $selpro_date, $productId, $userid);
    }
}
?>
