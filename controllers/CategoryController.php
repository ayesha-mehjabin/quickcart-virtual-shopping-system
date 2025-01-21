<?php
require_once '../models/Category.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];
    $category = new Category();

    if ($action == 'add') {
        $name = $_POST['name'];
        $description = $_POST['description'];
        if ($category->addCategory($name, $description)) {
            echo "Category added successfully!";
        } else {
            echo "Failed to add category.";
        }
    } elseif ($action == 'delete') {
        $id = $_POST['id'];
        if ($category->deleteCategory($id)) {
            echo "Category deleted successfully!";
        } else {
            echo "Failed to delete category.";
        }
    } elseif ($action == 'delete') {
        $id = $_POST['id'];
    
        if ($category->deleteCategory($id)) {
            echo "Category deleted successfully!";
        } else {
            echo "Failed to delete category.";
        }
    } elseif ($action == 'update') {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
    
        if ($category->updateCategory($id, $name, $description)) {
            echo "Category updated successfully!";
        } else {
            echo "Failed to update category.";
        }
    }

    header("Location: ../views/category_view.php");
    exit;
}
?>
