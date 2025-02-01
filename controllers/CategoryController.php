<?php
require_once '../models/Category.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $action = $_POST['action'];
    $category = new Category();
    
    if($action == 'add'){
        
        $name = $_POST['name'];
        $description = $_POST['description'];
       
        $category->addCategory($name, $description);
    }

    elseif($action == 'delete')
    {
        $id = $_POST['id'];

        $category->deleteCategory($id);
    }
    elseif($action == 'update'){

        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];

        $category->updateCategory($id, $name, $description);


    }
    
}
?>

