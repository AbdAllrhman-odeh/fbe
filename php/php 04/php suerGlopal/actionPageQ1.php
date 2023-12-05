<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($_POST)
        {
            $email=$_POST['email'];
            $passowrd=$_POST['password'];
            echo('your email is :'.$email.'<br>');
            echo('your password is :'.$passowrd.'<br>');
        }
    ?>
</body>
</html>