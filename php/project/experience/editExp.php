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
            $sql = "SELECT * FROM experience WHERE expId = '$id'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if($result)
            {
                $expTitle=$result['expTitle'];
                $expBody=$result['expBody'];
                $stratDate=$result['startDate'];
                $endDate=$result['endDate'];
                $userId=$result['userId'];
                ?>
            <form action="processUserExp.php?id=<?= $id; ?>" method="POST">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="hidden" name="userId" value="<?= $userId ?>">
        
                expTitle:
                <input type="text" value="<?=$expTitle;?>" name="expTitle"><br><br>
        
                expBody:
                <input type="text" value="<?= $expBody; ?>" name="expBody"><br><br>
        
                startDate:
                <input type="date" value="<?= $stratDate ?>"  name="startDate"><br><br>

                endDate:
                <input type="date" value="<?= $endDate ?>"  name="endDate"><br><br>
        
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