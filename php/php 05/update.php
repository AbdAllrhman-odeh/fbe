<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update page</title>
</head>
<body>
    <?php
    require('config.php');
        if($_GET && isset($_GET['id']))
        {
            //[1] get the user info
            $id=$_GET['id'];

            $sql = "SELECT * FROM employees WHERE id = '$id'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if($result)
            {
                //[2] display the user info
                //we will proccess the updated data in filed named processUpdate.php
                ?>
                <form action='processUpdate.php?id={$id}' method='POST'>
                <input type='hidden' name='id' value='<?=$result['id']?>'>
                <label for='name'>Name:</label>
                <input type='text' name='name' value='<?=$result['name']?>'><br>
                <label for='address'>Address:</label>
                <input type='text' name='address' value='<?=$result['address']?>'><br>
                <label for='salary'>Salary:</label>
                <input type='number' name='salary' value='<?=$result['salary']?>'><br>
                <input type='submit' value='Update'>
              </form>
              <?php
            }
            else
            {
                echo('the provided id is not correct');
            }
        }
        else
        {
            echo('error:/');
        }
    ?>
</body>
</html>