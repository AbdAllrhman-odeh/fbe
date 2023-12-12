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
            $sql = "SELECT * FROM skills WHERE skillsId = '$id'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if($result)
            {
                $skill=$result['skill'];
                $userId=$result['userId'];
                ?>
            <form action="processUserSkills.php?id=<?= $id; ?>" method="POST">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="hidden" name="userId" value="<?= $userId ?>">
        
                Skill:
                <input type="text" value="<?=$skill;?>" name="skill"><br><br>

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