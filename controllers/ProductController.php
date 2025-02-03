<?php

require_once "../models/PaymentModel.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'] ?? '';
    $payment = new Payment();
    
    // Function to sanitize input
    function sanitize($data) {
        return htmlspecialchars(strip_tags(trim($data)));
    }

    function validateNumber($number) {
        return is_numeric($number) && $number > 0;
    }

    $errors = [];
    
    if ($action == 'add') {
        $PaymentID = sanitize($_POST['PaymentID'] ?? '');
        $PaymentMethod = sanitize($_POST['PaymentMethod'] ?? '');
        $PaymentStatus = sanitize($_POST['PaymentStatus'] ?? '');
        $PaymentDate = sanitize($_POST['PaymentDate'] ?? '');
        $Amount = sanitize($_POST['Amount'] ?? '');
        $OrderID = sanitize($_POST['OrderID'] ?? '');

        if (empty($PaymentMethod) || empty($PaymentStatus) || empty($PaymentDate) || empty($Amount) || empty($OrderID)) {
            $errors[] = "All fields are required except Payment ID.";
        }
        if (!validateNumber($Amount)) {
            $errors[] = "Amount must be a positive number.";
        }
        if (!validateNumber($OrderID)) {
            $errors[] = "Invalid Order ID.";
        }

        if (empty($errors)) {
            $payment->addPayment($PaymentID, $PaymentMethod, $PaymentStatus, $PaymentDate, $Amount, $OrderID);
            echo "Payment added successfully.";
        } else {
            foreach ($errors as $error) {
                echo "<p style='color:red;'>$error</p>";
            }
        }
    }
    
    elseif ($action == 'delete') {
        $PaymentID = sanitize($_POST['PaymentID'] ?? '');
        if (!validateNumber($PaymentID)) {
            echo "<p style='color:red;'>Invalid Payment ID.</p>";
        } else {
            $payment->deletePayment($PaymentID);
            echo "Payment deleted successfully.";
        }
    }
    
    elseif ($action == 'update') {
        $PaymentID = sanitize($_POST['PaymentID'] ?? '');
        $PaymentMethod = sanitize($_POST['PaymentMethod'] ?? '');
        $PaymentStatus = sanitize($_POST['PaymentStatus'] ?? '');
        $PaymentDate = sanitize($_POST['PaymentDate'] ?? '');
        $Amount = sanitize($_POST['Amount'] ?? '');
        $OrderID = sanitize($_POST['OrderID'] ?? '');
        
        if (!validateNumber($PaymentID)) {
            $errors[] = "Invalid Payment ID.";
        }
        if (empty($PaymentMethod) || empty($PaymentStatus) || empty($PaymentDate) || empty($Amount) || empty($OrderID)) {
            $errors[] = "All fields are required.";
        }
        if (!validateNumber($Amount)) {
            $errors[] = "Amount must be a positive number.";
        }
        if (!validateNumber($OrderID)) {
            $errors[] = "Invalid Order ID.";
        }
        
        if (empty($errors)) {
            $payment->updatePayment($PaymentID, $PaymentMethod, $PaymentStatus, $PaymentDate, $Amount, $OrderID);
            echo "Payment updated successfully.";
        } else {
            foreach ($errors as $error) {
                echo "<p style='color:red;'>$error</p>";
            }
        }
    }
} 

?>
