<?php
    require('../configuration/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Be With Us</title>
</head>
<body>
    <form action="register.php" method="POST" enctype="multipart/form-data">
        Enter your Name:
        <input type="text" name="name"><br><br>

        Enter your email:
        <input type="email" name="email"><br><br>

        Enter your password:
        <input type="password" name="password"><br><br>

        Enter your phoneNum:
        <input type="number" name="phoneNum"><br><br>

        Choose your picture:<br>
        <input type="file" id="image" accept=".png, .jpg, .jpeg" name="image"><br><br>

        Tell us about yourself: <br>
        <textarea name="about" rows="4" cols="50" placeholder="Type about yourself here..."></textarea><br><br>

        <input type="submit" value="register">
    </form>
    <?php
    if ($_POST) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phoneNum = $_POST['phoneNum'];

        // Default value for $newImgName
        $newImgName = '';

        if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
            $fileName = $_FILES['image']['name'];
            $fileSize = $_FILES['image']['size'];
            $tmpName = $_FILES['image']['tmp_name'];

            $validImgExt = ['jpg', 'jpeg', 'png'];
            $imgExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

            if (!in_array($imgExt, $validImgExt)) {
                echo("<script>alert('Invalid image extension')</script>");
            } else if ($fileSize > 1000000) {
                echo("<script>alert('Image is too big')</script>");
            } else {
                // Generate a unique name for the image
                $newImgName = uniqid() . '.' . $imgExt;

                // Move the uploaded file to the 'img' directory
                move_uploaded_file($tmpName, '../img/' . $newImgName);
            }
        }

        $about = $_POST['about'];

        function check($var)
        {
            $var = trim($var);
            $var = stripslashes($var);
            $var = htmlspecialchars($var);

            return $var;
        }

        $name = check($name);
        $email = check($email);
        $password = check($password);
        $phoneNum = check($phoneNum);
        $about = check($about);

        // Use prepared statement to prevent SQL injection
        $sql = "INSERT INTO user (name, email, password, phoneNum, image, about) VALUES (?, ?, ?, ?, ?, ?)";
        try {
            $stmt = $conn->prepare($sql);
            $stmt->execute([$name, $email, $password, $phoneNum, $newImgName, $about]);

            // echo("<script>alert('Added');</script>");
            header('Location:login.php');
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    ?>
</body>
</html>
