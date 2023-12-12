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
            $sql = "SELECT * FROM education WHERE eduId = '$id'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if($result)
            {
                $name=$result['name'];
                $degreeType=$result['degreeType'];
                $gpa=$result['gpa'];
                $stratDate=$result['startDate'];
                $endDate=$result['endDate'];
                $userId=$result['userId'];
                ?>
            <form action="processUserEdu.php?id=<?= $id; ?>" method="POST">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="hidden" name="userId" value="<?= $userId ?>">
        
                uni/shcool Name:
                <input type="text" value="<?=$name;?>" name="name"><br><br>
        
                DegreeType:
                <input type="text" value="<?= $degreeType; ?>" name="degreeType"><br><br>
        
                Gpa:
                <input type="text" value="<?= $gpa ?>" name="gpa"><br><br>
        
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