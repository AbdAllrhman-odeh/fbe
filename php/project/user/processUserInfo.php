<?php
require('../configuration/config.php');
    if($_POST && isset($_POST['id'])) 
    { 
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $passowrd=$_POST['password'];
        $num=$_POST['num'];
        var_dump($email);

        $sql = "UPDATE user SET name = '$name',email= '$email',password= '$passowrd',phoneNum='$num'  WHERE userId = '$id'";
        $stmt = $conn->prepare($sql);

        try{
            $stmt->execute();
            $msg="updated successfully<br>";
        }
        catch(PDOException $e){
            echo('error: ');
            echo($e->getMessage());
            $msg="error on update <br>";
        }
        header('Location:../admin.php?id='.$id);

    }
    else
    {
        echo('error in the id or the method...');
    }
?>