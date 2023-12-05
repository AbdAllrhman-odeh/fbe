<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <form method="POST">
      <input type="url" name="url"><br><br>
      <input type="submit" value="go">
   </form>
   <?php
      if($_POST)
      {
         $url=$_POST['url'];
         header('Location: '.$url);
         exit();
      }
   ?>
</body>
</html>