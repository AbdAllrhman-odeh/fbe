

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <form method="POST">
      To do list:(saved in the session)
      <input type="text" name="toDo">
      <br><br>
      <input type="submit" value="add!">
   </form>
   <?php
   // session_unset();
   // save the count var in the session 
   // session_destroy();
   session_start();
   if(!isset($_SESSION['count']))
   {
      $_SESSION['count']=1;
   }
   echo('Task num :'.$_SESSION['count'].'<br>');
      if($_POST)
      {
         $var=$_POST['toDo'];
         $count=$_SESSION['count'];
         //add the toDolist
            $_SESSION['toDo'.$count]=$var;
            $_SESSION['count']++;
         //git the list form the session
         for($i=1;$i<=$count;$i++)
         {
            echo('Task num ['.$i.']= '.$_SESSION['toDo'.$i].'<br>');
         }
      }
   // $_SESSION['count']=0;
   // header('Location:'.$_SERVER['PHP_SELF']);
   // exit();
   ?>
</body>
</html>