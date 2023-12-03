<?php declare(strict_types=1);
    /* what is the functions,types of the function */
    echo('<h1>functions in php</h1>');
    echo('as we know, the function is an block of code that solve a specifc problem,do specifc things<br>
    The functions will not execute unitl you call it<br>');
    echo('<mark>function names are not case sensitve</mark>');
    echo('<h3>There are two types of functions:<br>user Defined functions<br>builtin functions</h3>');

    /* structure of the function */
    echo('<h1>1.buitlin functions</h1>');
    echo('---The structure:---<br>');
    echo('function functionName(Arguments){<br>
        body of the function<br>
    }<br>');
    echo('<h4>---ex---</h4>');
    echo('function addTwoNumbers($var1,$var2)<br>{return $var1+$var2;}');
    echo('<br>And we can call the function like this:functionName(parameitar);<br>');
    echo('  addTwoNumbers(10,5);<br>');

    /* Ex */
    function addTwoNumbers($var1,$var2)
    {
        return $var1+$var2;
    }
    echo(addTwoNumbers(10,5));

    /* defalut arguments */
    echo('<br><h4>---Defalut Arguments---</h4>');
    function addThreeNumbers($var1=10,$var2=20,$var3=30)
    {
        return $var1+$var2+$var3;
    }
    echo('addThreeNumbers():'.addThreeNumbers().'<br>');
    echo('addThreeNumbers(1):'.addThreeNumbers(1).'<br>');
    echo('addThreeNumbers(1,2):'.addThreeNumbers(1,2).'<br>');
    echo('addThreeNumbers(1,2,3):'.addThreeNumbers(1,2,3).'<br>');
    echo('addThreeNumbers(,2,3):-->error.<br>');
    
    /* passing by value */
    echo('<h4>---passing by value---</h4>');
    $x=10;
    echo('x before:'.$x.'<br>');
    function passingByValue($var)
    {
        $var--;
    }
    passingByValue($x);
    echo('x after:'.$x.'<br>');

    /*passing by ref */
    echo('<h4>---passing by ref---</h4>');
    $y=10;
    echo('y before:'.$y.'<br>');
    function passingByRef(&$var)
    {
        $var--;
    }
    passingByRef($y);
    echo('y after:'.$y.'<br>');

    /* strict data type */
    echo('<h4>---strict data types---</h4>');
    function addTwoInt(int $x,int $y):int
    {
        return $x+$y;
    }
    // echo(addTwoInt(4,"4 days ago"))-->not suppose to have an error;
    echo('addTwoInt(1,2):'.addTwoInt(1,2));

    /* variadic function*/
    echo('<h4>---variadic function---</h4>');
    function sumMyNumbers(...$x) {
        $n = 0;
        $len = count($x);   
        for($i = 0; $i < $len; $i++) {
          $n += $x[$i];
        }
        return $n;
      }
      
      $a = sumMyNumbers(1, 2, 3, 4, 5, 6);//sum is 21
      echo ('a = '.$a.'<br>');


?>