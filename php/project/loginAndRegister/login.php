<?php
    require('../configuration/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
        <!--email-->
        <label for="email">Enter your email:</label>
        <input type="email" name="email"><br><br>
        <!--password-->
        <label for="password">Enter your Password:</label>
        <input type="password" name="password"><br><br>
        <!--submit-->
        <input type="submit" value="Login">
    </form>
    <?php
        //chek if the form submited
        if($_POST)
        {
            //get the email and the password
            $email=$_POST['email'];
            $password=$_POST['password'];

            //prepare the query
            $sql="SELECT * FROM user WHERE email = '$email'";
            $stmt = $conn->prepare($sql);

            try
            {
                if($stmt->execute())
                {
                    //check if email exist
                    $result = $stmt->fetch(PDO::FETCH_ASSOC);

                    if ($result!=false && $password == $result['password'])
                    {
                        //email exist
                        //correct pass
                        $id=$result['userId'];
                        header("Location:../admin.php?id=$id");
                        exit();
                    }
                    else if($result!=false && $password!=$result['password'])
                    {
                        echo('wrong password');
                    }
                    else
                    {
                        //email does not exist 
                        echo('wrong email');
                    }
                }
                else
                {
                    echo('error');
                }
            }
            catch (PDOException $e)
            {
                echo "error:".$e->getMessage();
            }
        }
    ?>
</body>
</html>