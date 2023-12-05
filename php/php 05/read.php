<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
    
</body>
</html>
<?php
    require('config.php');
        
    $sql="SELECT * FROM employees";
    $stmt=$conn->prepare($sql);

    try{
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Process the result
        echo('<br><a href="create.php">add new emp</a><br>');
        echo('<table border=1px style="border-collapse:no-collapse; width:50% height:50%">');
        echo('<tr><td>ID</td><td>Name</td><td>Address</td><td>Salary</td><td>Action</td></tr>');
        foreach ($result as $row) {
            echo "<tr> <td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>"
             . $row['address'] .'</td><td>'.$row['salary']. "</td><td><a href='delete.php?id={$row['id']}'>delete</a> <a href='update.php?id={$row['id']}'>update</a></td></tr>";
        }

        echo('</table>');
        
    }
    catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>