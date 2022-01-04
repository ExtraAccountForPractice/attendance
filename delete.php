<?php

    require_once 'db/conn.php';
    require_once 'db/crud.php';
    if(!$_GET['id'])
    {
        echo 'Error ID';
        
    }
    else{
        $id = $_GET['id'];
        $crud = new crud($pdo);
        $result = $crud->delete($id);
        if($result){
            header("Location: viewrecords.php");
        }
        else{
            echo "Error";
        }
    }
?>