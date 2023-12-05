<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add emp</title>
</head>
<body>
    <form action="" method="POST">
        <label for="name">Enter your name:</label>
        <input type="text" name="name"><br><br>
        <label for="address">Enter your address:</label>
        <input type="text" name="address"><br><br>
        <label for="salary">Enter your salary:</label>
        <input type="number" min="200" max="2000" name="salary"><br><br>
        <input type="submit" value="add emp">
    </form>

<?php
require('config.php');

if ($_POST) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    $sql = "INSERT INTO employees (name, address, salary) VALUES ('$name', '$address','$salary')";

    $stmt = $conn->prepare($sql);


    // Execute the statement
    try {
        $stmt->execute();
        echo "Data inserted successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
}
?>
</body>
</html>