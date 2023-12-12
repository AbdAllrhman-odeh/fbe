<?php
    require('../configuration/config.php');
    if($_POST && isset($_POST['id'])) 
    { 
        $id=$_POST['id'];
        $skill=$_POST['skill'];
        $userId=$_POST['userId'];
        

        $sql = "UPDATE skills SET skill = '$skill'  WHERE skillsId = '$id'";
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