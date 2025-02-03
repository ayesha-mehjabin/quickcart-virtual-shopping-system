<?php
require_once '../models/Category.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];
    $category = new Category();
    $error_occurred = false;

    if ($action == 'add') {
        $name = $_POST['name'];
        $description = $_POST['description'];

        if ($name == "") {
            $error_occurred = true;
            echo "Category Name is Required.";
            echo "<br>";
        } elseif (strlen($name) < 3 || strlen($name) > 50) {
            $error_occurred = true;
            echo "Category name must be between 3 to 50 characters.";
            echo "<br>";
        } else {
            $name = test_input($name);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $error_occurred = true;
                echo  "Only letters and white space allowed.";
                echo "<br>";
            }
        }

        if (strlen($description) > 250) {
            $error_occurred = true;
            echo "Category description shoudn't be exceeded 250 Characters.";
            echo "<br>";
        }

        if ($error_occurred) {
            echo "The form has not been submitted. Try again.";
        } else {
            $category->addCategory($name, $description);
        }
    } elseif ($action == 'delete') {

        $id = $_POST['id'];

        if ($id == "") {
            $error_occured = true;
            echo "Id is Required.";
            echo "<br>";
        }

        if ($error_occurred) {
            echo "The form has not been submitted. Try again.";
        } else {
            $category->deleteCategory($id);
        }
      
    } elseif ($action == 'update') {

        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];

        $category->updateCategory($id, $name, $description);
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}
