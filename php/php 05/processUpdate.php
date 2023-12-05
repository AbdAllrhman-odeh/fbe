<?php
require('config.php');
    if($_POST && isset($_POST['id'])) 
    { 
        // print_r($_POST['id']);
        //[1] get the new data
        $id=$_POST['id'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $salary=$_POST['salary'];

        $sql = "UPDATE employees SET name = '$name',address= '$address',salary= '$salary'  WHERE id = '$id'";
        $stmt = $conn->prepare($sql);

        try{
            //[2] update..
            $stmt->execute();
            echo('updated sucessufully!');
        }
        catch(PDOException $e){
            echo('error: ');
            echo($e->getMessage());
        }
        //[3] return to the read.php
        header('Location:read.php');

    }
    else
    {
        echo('error in the id or the post...');
    }
?>