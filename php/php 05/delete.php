<?php
require('config.php');
    if($_GET && isset($_GET['id']))
    {
        $id=$_GET['id'];
        
        $sql="DELETE FROM employees WHERE id = '$id'";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        header('Location:read.php');    
    }
    else
    {
        echo('error in the method or the id is not set');
    }
?>