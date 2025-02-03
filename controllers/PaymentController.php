<?php

require_once "../models/PaymentModel.php";


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $action = $_POST['action'];
        $payment = new Payment();
    
        if($action == 'add') {
            $PaymentID = $_POST['PaymentID'];
            $PaymentMethod = $_POST['PaymentMethod'];
            $PaymentStatus = $_POST['PaymentStatus'];
            $PaymentDate = $_POST['PaymentDate'];
            $Amount = $_POST['Amount'];
            $OrderID = $_POST['OrderID'];
    
            $payment->addPayment($PaymentID, $PaymentMethod, $PaymentStatus, $PaymentDate, $Amount, $OrderID);
        }

        elseif($action == 'delete'){
            $PaymentID = $_POST['PaymentID'];
    
            $payment->deletePayment($PaymentID);
        }

        elseif($action == 'update'){
            $PaymentID = $_POST['PaymentID'];
            $PaymentMethod = $_POST['PaymentMethod'];
            $PaymentStatus = $_POST['PaymentStatus'];
            $PaymentDate = $_POST['PaymentDate'];
            $Amount = $_POST['Amount'];
            $OrderID = $_POST['OrderID'];
            
    
            $product->updatePayment($PaymentID, $PaymentMethod, $PaymentStatus, $PaymentDate, $Amount, $OrderID);
        }
        
    } 



?>
