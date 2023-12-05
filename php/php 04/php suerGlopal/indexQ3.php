<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <form method="POST">
      Enter num1:
      <input type="number" name="num1"><br><br>
      Enter the opertion:
      <input type="text" name="op">
      <br><br>
      Enter num2:
      <input type="number" name="num2"><br><br>
      <input type="submit" value="calculate">

   </form>
   <?php
      if($_POST)
      {
         $num1=$_POST['num1'];
         $num2=$_POST['num2'];
         $op=$_POST['op'];
         $sum=0;
         switch($op)
         {
            case '+':$sum=$num1+$num2; break;
            case '-':$sum=$num1-$num2; break;
            case '*':$sum=$num1*$num2; break;
            case '/':$sum=$num1/$num2; break;
            default:$sum="wrong operation";
         }

         echo($sum);
      }
   ?>
</body>
</html>