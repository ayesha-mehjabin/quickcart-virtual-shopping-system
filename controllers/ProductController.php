<?php
require_once "../models/Product.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $action = $_POST['action'];
    $product = new Product();

    if($action == 'add') {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $img = $_POST['img'];
        $category = $_POST['category'];

        $product->addProduct($name, $description, $quantity, $price, $img, $category);
    }

    elseif($action == 'delete'){
        $id = $_POST['id'];

        $product->deleteProduct($id);
    }

    elseif($action == 'update'){

        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $quantity = $_POST['quantity'];
        $img = $_POST['img'];
        $price = $_POST['price'];
        $category = $_POST['category'];

        $product->updateProduct($id, $name, $description, $quantity, $img, $price, $category);
    }
    
}
?>