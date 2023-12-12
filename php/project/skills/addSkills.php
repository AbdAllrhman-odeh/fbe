<?php
    require('../configuration/config.php');

    if ($_POST) {
        session_start();
        $id = $_SESSION['id'];

        $skillName = $_POST['skillName'];

        function check($var) {
            $var = trim($var);
            $var = stripslashes($var);
            $var = htmlspecialchars($var);
            return $var;
        }

        $skillName = check($skillName);

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
                    $sql = "INSERT INTO skills (skill, image, userId) VALUES (?, ?, ?)";
                    
                    try {
                        $stmt = $conn->prepare($sql);
                        $stmt->execute([$skillName, $newImgName, $id]);

                        // Add the message to the session
                        $_SESSION['success_msg'] = 'Skill added successfully';

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
