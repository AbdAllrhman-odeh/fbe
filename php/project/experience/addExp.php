<?php
    require('../configuration/config.php');
    if($_POST) 
    {
        session_start();
        $id=$_SESSION['id'];

        $expTitle=$_POST['expTitle'];
        $expBody=$_POST['expBody'];
        $startDate=$_POST['startDate'];
        $endDate=$_POST['endDate'];

        function check($var)
        {
            $var=trim($var);
            $var=stripslashes($var);
            $var=htmlspecialchars($var);

            return $var;
        }
        
        $expTitle=check($expTitle);
        $expBodyame=check($expBody);
        $startDate=check($startDate);
        $endDate=check($endDate);
        

        $sql="INSERT INTO experience (expTitle,expBody,startDate,endDate,userId) VALUES ('$expTitle','$expBody','$startDate','$endDate','$id')";
        try{
            $stmt=$conn->prepare($sql);
            $stmt->execute();

            //add the msg to the session
            $_SESSION['success_msg'] = 'Experience added successfully';

            header('Location:../admin.php?id=' . $id);
            exit();
        }
        catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

    }

?>