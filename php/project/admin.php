<?php
    session_start();
    require('configuration/config.php');
    if (isset($_SESSION['success_msg']))
    {
        $successMsg = $_SESSION['success_msg'];
        // unset the session variable to avoid displaying it again
        unset($_SESSION['success_msg']);
    
?>
<script>
    // Display SweetAlert with the success message
    Swal.fire({
        title: 'Success!',
        text: '<?php echo $successMsg; ?>',
        icon: 'success',
        timer: 2500, // Show for 2.5 seconds
        showConfirmButton: false
    });
    </script>
<?php 
    }
    if(isset($_SESSION['delete_msg'])) 
    {
        $deleteMsg = $_SESSION['delete_msg'];
        // unset the session variable to avoid displaying it again
        unset($_SESSION['delete_msg']);  
?>
    <script>
    // Display SweetAlert with the delete message
    Swal.fire({
        title: 'Deleting Record...',
        text: '<?php echo $deleteMsg; ?>',
        icon: 'warning',
        timer: 2500, // Show for 2.5 seconds
        showConfirmButton: false
    });
    </script>
<?php
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <style>
        body {
            margin-left: 80px !important; 
            margin-right: 80px !important;
            margin-top: 20px !important;
            margin-bottom: 20px !important;
        }
        @media (max-width: 700px) {
            body {
                margin-left: 5px !important;
                margin-right: 5px !important;
            }
        }
        table{
            text-align: center;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
        }
        input[type="submit"] {
            background-color: #0000FF;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        h1{
            text-align: center;
        }
        .edit:hover{
            color:red;
        }
        .add{
            float:right;
            color: white !important;
        }
        .modal-header{
            background-color: white;
            color:black;
        }
        .heading{
            text-align: center;
            display: inline-block;
            margin-right: auto;
            margin-left: auto;
        }
        a{
            text-decoration: none;
        }
        .profile{
            width: 100px;
            height: 200px;
            display: block;
        }
        .img{
            width: 100px;
            height: 100px;
        }
    </style>
    <title>Admin pannel</title>
</head>
<body>
<?php
    //check if the id is set
    if(isset($_GET['id']))
    {

        $id=$_GET['id'];
        
        //save the id to the session so we can access it
        $_SESSION['id'] = $id;


        //CRUD [CREATE READ UPDATE DLETE] operaions
        // [1] READ  

        //prepare the query
        $sql="SELECT * FROM user WHERE userId = '$id'";
        $stmt=$conn->prepare($sql);

        if($stmt->execute())
        {
            echo('<h1>My Information</h1>');
            //get the userName info
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $name=$result['name'];
            $email=$result['email'];            
            $password=$result['password'];
            $num=$result['phoneNum'];
            $about=$result['about'];
            $img=$result['image'];
            
            $formForInfo='
            <form action="user/userInfo.php?id='.$id.'" method="POST">
                <img src=img/'.$img.' alt="profile picture" class="profile">
                Your Id:
                <input type="text" value='.$id.' disabled><br><br>
        
                Your Name:
                <input type="text" value='.$name.' disabled><br><br>
        
                Your Email:
                <input type="email" value='.$email.' disabled><br><br>
        
                Your Password:
                <input type="text" value='.$password.' disabled><br><br>
        
                Your phoneNum
                <input type="number" value='.$num.' disabled><br><br>

                About:
                <textarea name="about" rows="4" cols="50" disabled>'.$about.'</textarea><br><br>
        
                <input class="bg-info" type="submit" value="Change My Information">
            </form>
            ';
            echo($formForInfo);
            echo('<hr>');
            
        }

        //get the user Education
        $sql="SELECT * FROM education WHERE userId = '$id'";
        $stmt=$conn->prepare($sql);
        
        try
        {
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            

            echo('<h1>Education Information</h1>');
            ?>
            <!--[2]CREATE EDU-->
            <!-- popup -->
            <div class="container mt-3 mb-3" style="float: left;">
                <button type="button" style="color:white;" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#myModalEdu">
                    Add
                </button>
                <div class="modal" id="myModalEdu">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">
                                    Add Education
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <form action="education/addEdu.php" method="POST"  enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label class="form-label" for="name">Name of the Universty</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                    <div class="mb-3"> 
                                        <label class="form-label" for="degreeType">Degree Type</label>
                                        <input type="text" class="form-control" name="degreeType">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="gpa">gpa</label>
                                        <input type="text" class="form-control" name="gpa">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="startDate">Start Date</label>
                                        <input type="date" class="form-control" name="startDate">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="endDate">End Date</label>
                                        <input type="date" class="form-control" name="endDate">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="endDate">Give Us A Picture</label>
                                        <input type="file" id="image" accept=".png, .jpg, .jpeg" name="image"><br><br>
                                    </div>
                                    <div>
                                        <input type="submit" class="form-control bg-info" value="Add">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end of popup-->
            <?php
            //print the user education info
            echo('<table class="table table-hover table-bordered ">');
            echo('<tr class="table table-primary"><th>#</th><th>Name</th><th>Degree Type</th><th>Gpa</th><th>Start Date</th>
            <th>End Date</th><th>Image</th><th>Edit</th><th>Delete</th></tr>');

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                echo "<tr> <td>" . $row['eduId'] . "</td><td>" . $row['name'] . "</td><td>"
                . $row['degreeType'] .'</td><td>'.$row['gpa']. "</td><td>".$row['startDate']."</td><td>".$row['endDate']."</td><td><img alt='Logo' class='img' src='img/".$row['image']."'></td><td><a href='education/editEducation.php?id={$row['eduId']}'><i class='fa-solid fa-pen-to-square edit'></i></a></td><td><a href='education/deleteEdu.php?id={$row['eduId']}'><i class='fa-solid fa-trash edit'></i></a></td></tr>";
            }
            
    
            echo('</table>');
            echo('<br>');
    
        }

        //get the user Experince
        catch(PDOException $e)
        {
            echo('error'.$e->getMessage());
        }
    
            //get the user experince
            $sql="SELECT * FROM experience WHERE userId = '$id'";
            $stmt=$conn->prepare($sql);
    
        try
        {
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            
            echo('<hr>');
            //print the user experience info
            echo('<h1>Experience Information</h1>');
            //create user Exp
            ?>
            <div class="container mt-3 mb-3" style="float: left;">
                <button type="button" style="color:white;" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#myModalExp">
                    Add
                </button>
                <div class="modal" id="myModalExp">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">
                                    Add Expereince
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <form action="experience/addExp.php" method="POST">
                                    <div class="mb-3">
                                        <label class="form-label" for="expTitle">Experience Title</label>
                                        <input type="text" class="form-control" name="expTitle">
                                    </div>
                                    <div class="mb-3"> 
                                        <label class="form-label" for="expBody">About your Experience</label>
                                        <textarea name="expBody" rows="4" cols="50" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="startDate">Start Date</label>
                                        <input type="date" class="form-control" name="startDate">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="endDate">End Date</label>
                                        <input type="date" class="form-control" name="endDate">
                                    </div>
                                    <div>
                                        <input type="submit" class="form-control bg-info" value="Add">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end of popup-->
            <?php

            echo('<table class="table table-hover table-bordered">');
            echo('<tr class="table table-primary"><th>Experience Id</th><th>Experience Title</th><th>Experience Body</th><th>Start Date</th>
            <th>End Date</th><th>Edit</th><th>Delete</th></tr>');
    
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                echo "<tr> <td>" . $row['expId'] . "</td><td>" . $row['expTitle'] . "</td><td>"
                . $row['expBody'] .'</td><td>'.$row['startDate']. "</td><td>".$row['endDate']."</td><td><a href='experience/editExp.php?id={$row['expId']}'><i class='fa-solid fa-pen-to-square edit'></i></a></td><td><a href='experience/deleteExp.php?id={$row['expId']}'><i class='fa-solid fa-trash edit'></i></a></td></tr>";
            }
            
            echo('</table>');
            echo('<br>');
        
        }

        //get the user skills
        catch(PDOException $e)
        {
            echo('error'.$e->getMessage());
        }
        
                //get the user experince
                $sql="SELECT * FROM skills WHERE userId = '$id'";
            $stmt=$conn->prepare($sql);

        try
        {
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            
            echo('<hr>');
            //print the user skills info
            echo('<h1>Skills Information</h1>');
            ?>
            <!--[2]CREATE skills-->
            <!-- popup -->
            <div class="container mt-3 mb-3" style="float: left;">
                <button type="button" style="color:white;" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#myModalSkills">
                    Add
                </button>
                <div class="modal" id="myModalSkills">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">
                                    Add Skills
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <form action="skills/addSkills.php" method="POST"  enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label class="form-label" for="name">Skill Name</label>
                                        <input type="text" class="form-control" name="skillName">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="endDate">Give Us A Picture</label>
                                        <input type="file" id="image" accept=".png, .jpg, .jpeg" name="image"><br><br>
                                    </div>
                                    <div>
                                        <input type="submit" class="form-control bg-info" value="Add">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end of popup-->
            <?php
            //print the skills info
            echo('<table class="table table-bordered table-hover">');
            echo('<tr  class="table table-primary"><th>Skills Id</th><th>Skill</th><th>Image</th><th>Edit</th><th>Delete</th></tr>');

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                echo "<tr> <td>" . $row['skillsId'] . "</td><td>" . $row['skill'] . "</td><td><img src='img/".$row['image']."' alt='Logo' class='img'></td><td><a href='skills/editSkills.php?id={$row['skillsId']}'><i class='fa-solid fa-pen-to-square edit'></i></a></td><td><a href='skills/deleteSkills.php?id={$row['skillsId']}'><i class='fa-solid fa-trash edit'></i></a></td></tr>";
            }
            
        echo('</table>');
        echo('<br>');        
        }
        catch(PDOException $e)
        {
            echo('error'.$e->getMessage());
        } 
        echo('<hr>');
        echo('<h1><a href="portfolio.php?id='.$id.'">See my protfoli</a></h1>');

    }
    else
    {
        echo('invalid id');
    }

?>
</body>
</html>
