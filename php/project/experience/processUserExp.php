<?php
    require('../configuration/config.php');
    if($_POST && isset($_POST['id'])) 
    { 
        $id=$_POST['id'];
        $expTitle=$_POST['expTitle'];
        $expBody=$_POST['expBody'];
        $startDate=$_POST['startDate'];
        $endDate=$_POST['endDate'];
        $userId=$_POST['userId'];
        session_start();
        $_SESSION['id']=$userId;

        $sql = "UPDATE experience SET expTitle = '$expTitle',expBody= '$expBody',startDate='$startDate',endDate= '$endDate'  WHERE expId = '$id'";
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