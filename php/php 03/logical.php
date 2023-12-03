<?php
    $br='<br>';
    echo('q1<br>');
    function leapYear($year)
    {
        if($year%4==0)
        {
            if($year%100==0)
            {
                if($year%400==0)
                {
                    echo('leap year!');
                }
                else
                {
                    echo('not a leap year');
                }
            }
            else
            {
                echo('leap year!');
            }
        }
        else
        {
            echo('not a leap year');
        }
    }
    leapYear(2000);

    #q2
    echo('<hr>q2');
    echo($br);
    function season($temp=27)
    {
        if($temp>20) echo('winteeeeeeeeeeer');
        else echo('sumerTime!');
    }
    season();
    echo($br);
    
    #q3
    echo('<hr>q3<br>');

    function calculateSum($x,$y)
    {
        $sum=1;
        if($x==$y)
        {
            $sum=($x+$y)*3;
        }
        else 
        {
            $sum=($x+$y)/2;
        }
        echo $sum;
    }
    calculateSum(2,2);

    #q4
    echo('<hr>q4<br>');
    function sumBool($x,$y)
    {
        if($x==$y) return $x+$y;
        return false;
    }
    echo(sumBool(10,20));

    #q5
    echo('<hr>q5<br>');
    function divByThree($num)
    {
        if($num%3==0) return true;
        return false;
    }
    echo(divByThree(21));

    #q6
    echo('<hr>q6<br>');
    function withRange($num)
    {
        if($num>19 && $num<51) return true;
        return false;
    }
    echo(withRange(21));

    #q7
    echo('<hr>q7<br>');
    function maxFun($x,$y,$z)
    {
        echo max($x,$y,$z);
    }
    maxFun(10,-1,100);

    #q8
    echo('<hr>q8<br>');
    function calculateBill($num)
    {
        if ($num <= 50) {
            return 2.50 * $num;
        } elseif ($num <= 150) {
            return 2.50 * 50 + 5.00 * ($num - 50);
        } elseif ($num <= 250) {
            return 2.50 * 50 + 5.00 * 100 + 6.20 * ($num - 150);
        } else {
            return 7.50 * $num;
        }
    }
    echo calculateBill(249);

    #q9
    echo('<hr>q9<br>');
    function calc($num1, $num2, $operator) {
        switch ($operator) {
            case '+':
                return $num1 + $num2;
            case '-':
                return $num1 - $num2;
            case '*':
                return $num1 * $num2;
            case '/':
                return ($num2 != 0) ? $num1 / $num2 : "Cannot divide by zero";
            default:
                return "Invalid operator";
        }
    }

    $result = calc(10, 10, '+');
    echo('Result: ' . $result);

    #q10
    echo('<hr>q10<br>');
    function isLegal($num)
    {
        return ($num>18)?'legal!':'notyet';
    }

    echo isLegal(18);

    #q11
    echo('<hr>q11<br>');
    function type($num)
    {
        if($num==0) return 'zero';
        return ($num>=1)?'postive':'negative';
    }
    echo(type(20));


    #q12
    echo('<hr>q12<br>');
    function calculateGrade($scores) {
        $average = array_sum($scores) / count($scores);

        if ($average < 60) {
            return 'F';
        } elseif ($average < 70) {
            return 'D';
        } elseif ($average < 80) {
            return 'C';
        } elseif ($average < 90) {
            return 'B';
        } else {
            return 'A';
        }
    }

    $sampleScores = [60, 86, 95, 63, 55, 74, 79, 62, 50];
    $grade = calculateGrade($sampleScores);
    echo('output: \'' . $grade . '\'');



?>