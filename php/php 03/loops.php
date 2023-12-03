<?php
    #q1
    echo('<hr>');
    echo('q1<br>');
    function display()
    {
        echo('1-');
        for($i=2;$i<10;$i++)
        {
            echo($i.'-');
        }
        echo('10');
    
    }
    display();

    #q2
    echo('<hr>');
    function sum()
    {
        $sum=0;
        for($i=0;$i<31;$i++) $sum+=$i;
        return $sum;
    }
    echo('<br>q2<br>');
    echo(sum());

    #q3
    echo('<hr>');
    echo('<br>q3<br>');
    for($i=1;$i<6;$i++)
    {
        for($j=1;$j<6;$j++)
        {
            if($i==1)
            {
                echo('A ');
            }
            if($i==2)
            {
                if($j>3) echo('B ');
                else echo('A ');
            }
            if($i==3)
            {
                if($j>2) echo('C ');
                else echo('A ');

            }
            if($i==4)
            {
                if($j>1) echo('D ');
                else echo('A ');

            }
            if($i==5)
            {
                 echo('E ');

            }
        }
        echo('<br>');
    }


    #q4
    echo('<hr>');
    echo('q4<br>');
    for($i=1;$i<6;$i++)
    {
        for($j=1;$j<6;$j++)
        {
            if($i==1)
            {
                echo('1 ');
            }
            if($i==2)
            {
                if($j>3) echo('2 ');
                else echo('1 ');
            }
            if($i==3)
            {
                if($j>2) echo('3 ');
                else echo('1 ');

            }
            if($i==4)
            {
                if($j>1) echo('4 ');
                else echo('1 ');

            }
            if($i==5)
            {
                 echo('5 ');

            }
        }
        echo('<br>');
    }
    #q5
    echo('<hr>');
    echo('q5<br>');
    function q5()
    {
        $count=1;
        for($i=0;$i<5;$i++)
        {
            for($j=0;$j<5;$j++)
            {
                if($i==$j) echo($count++.' ');
                else echo('0 ');
            }
            echo('<br>');
        }
    }
    q5();

    #q6
    echo('<hr>');
    echo('q6<br>');
    function q6($num=5)
    {
        $sum=1;
        for($i=1;$i<=$num;$i++)
        {
            $sum*=$i;
        }
        echo($sum);
    }
    q6();

    echo('<br>q7<br>');
    #q7
    echo('<hr>'); 
    function Fibonacci($var=10)
    {
        $arr=array(0,1);
        for($i=2;$i<$var;$i++)
        {
            $x=$arr[$i-2]+$arr[$i-1];
            $arr[]=$x;
        }
        print_r($arr);
    }
    Fibonacci();

    #q8
    echo('<hr>');
    echo('<br>q8<br>');
    function countC($var="Orange Coding Academy")
    {
        $var=strtolower($var);
        $count=0;
        for($i=0;$i<strlen($var);$i++)
        {
            if($var[$i]=='c') $count++;
        }

        echo('count is ='.$count);
    }

    countC();
    echo('<br>q9<br>');
    #q9
    echo('<hr>');
    function table()
    {
        echo('<table style="border:1px solid black;">');
        for($i=1;$i<7;$i++)
        {
            echo('<tr style="border: 1px solid black ; border-collapse:no-collapse;" >');
            for($j=1;$j<6;$j++)
            {
                echo('<td style="border-collapse:collapse; border:1px solid black">'.$i.' *'.$j.' = '.$i*$j.'</td>');
            }
            echo('</tr>');
        }
        echo('</table>');
    }
        table();

        #q10
        echo('<hr>');
        echo('q10<br>');
        function functionFizzBuzz()
        {
            for($i=1;$i<51;$i++)
            {
                if($i%3==0 && $i%5==0)
                {
                    echo('FizzBuzz');
                }
                else if($i%3==0)
                {
                    echo('Fizz');
                }
                else if($i%5==0)
                {
                    echo('Buzz');
                }
                else{
                    echo($i);
                }
                echo(' ');
            }
        }
        functionFizzBuzz();

        #q11
        echo('<hr>');
        echo('<br>q11<br>');
        function floyd($var=15)
        {
            $count=1;
            for($i=1;$i<6;$i++)
            {
                for($j=1;;$j++)
                {
                    if($j<=$i){ echo($count++); echo(' ');}
                    if($j-1==$i) break;
                }
                echo('<br>');
            }
        }
        floyd();

        #q12
        echo('<hr>');
        $count=0;
        echo('<br>q12<br>');
        for($i=5;$i >1;$i--)
        {
            $space=$i;
            for($j=1;$j<6;$j++)
            {
                
            }
            echo('<br>');
            
        }
        #
?>