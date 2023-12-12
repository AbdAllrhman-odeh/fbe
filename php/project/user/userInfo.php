<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit user info page</title>
</head>
<body>
    <?php
    require('../configuration/config.php');
        if($_GET && isset($_GET['id']))
        {
            $id=$_GET['id'];
            $sql = "SELECT * FROM user WHERE userId = '$id'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if($result)
            {
                $name=$result['name'];
                $email=$result['email'];
                $password=$result['password'];
                $num=$result['phoneNum'];
                ?>
            <form action="processUserInfo.php?id=<?= $id; ?>" method="POST">
                <input type="hidden" name="id" value="<?= $id ?>">
        
                Your Name:
                <input type="text" value="<?=$name;?>" name="name"><br><br>
        
                Your Email:
                <input type="email" value="<?= $email; ?>" name="email"><br><br>
        
                Your Password:
                <input type="text" value="<?= $password ?>" name="password"><br><br>
        
                Your phoneNum
                <input type="number" value="<?= $num ?>"  name="num"><br><br>
        
                <input type="submit"value="Change my info">
            </form>
              <?php
            }
            else
            {
                echo('the id is not correct');
            }
        }
        else
        {
            echo('error:/');
        }
    ?>
</body>
</html>