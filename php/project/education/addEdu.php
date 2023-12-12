<?php
    require('../configuration/config.php');
    if ($_POST) {
        session_start();
        $id = $_SESSION['id'];

        $name = $_POST['name'];
        $degreeType = $_POST['degreeType'];
        $gpa = $_POST['gpa'];
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];

        function check($var)
        {
            $var = trim($var);
            $var = stripslashes($var);
            $var = htmlspecialchars($var);
            return $var;
        }

        $name = check($name);
        $degreeType = check($degreeType);
        $gpa = check($gpa);
        $startDate = check($startDate);
        $endDate = check($endDate);

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
                $destination = '../img/' . $newImgName;
                if (move_uploaded_file($tmpName, $destination)) {
                    // Image uploaded successfully
                    $sql = "INSERT INTO education (name, degreeType, gpa, startDate, endDate, image, userId) VALUES ('$name', '$degreeType', '$gpa', '$startDate', '$endDate', '$newImgName', '$id')";
                    try {
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();

                        // Add the message to the session
                        $_SESSION['success_msg'] = 'Education added successfully';

                        header('Location:../admin.php?id=' . $id);
                        exit();
                    } catch (PDOException $e) {
                        echo "Connection failed: " . $e->getMessage();
                    }
                } else {
                    echo("<script>alert('Error moving uploaded file')</script>");
                }
            }
        }
    }
?>
