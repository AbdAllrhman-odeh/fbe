<?php
require('../configuration/config.php');
    if($_POST && isset($_POST['id'])) 
    { 
        $id=$_POST['id'];
        $name=$_POST['name'];
        $degreeType=$_POST['degreeType'];
        $gpa=$_POST['gpa'];
        $startDate=$_POST['startDate'];
        $endDate=$_POST['endDate'];
        $userId=$_POST['userId'];
        

        $sql = "UPDATE education SET name = '$name',degreeType= '$degreeType',gpa= '$gpa',startDate='$startDate',endDate= '$endDate'  WHERE eduId = '$id'";
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
        header('Location:../admin.php?id='.$userId);

    }
    else
    {
        echo('error in the id or the method...');
    }
?>