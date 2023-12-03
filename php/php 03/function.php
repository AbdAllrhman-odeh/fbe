<?php
    //q1
    function checkPrimary($var)
    {
        if($var==1)
        {
            return true;
        }
        for($i=2;$i<$var;$i++)
        {
            if($var%$i==0)
            {
                return false; 
            }
            return true;
        }

    }
    echo('q1<br>');
    if(checkPrimary(17))
    {
        echo('prime');
    }
    else{
        echo('not prime');
    }

    // q2
    echo('<br>q2<br>');
    function reverseString($str)
    {
        $str2="";
        for($i=strlen($str)-1;$i>-1;$i--)
        {
            $str2.=$str[$i];     
        }
        return $str2;
    }
    echo(reverseString("hello world!"));
    echo('<br>q3 <br>');

    // q3
    function swapToNum(&$x,&$y)
    {
        $z=$x;
        $x=$y;
        $y=$z;
    }
    $x=10;
    $y=20;
    swapToNum($x,$y);
    echo('x='.$x.' y='.$y);

    #q4
    echo('<br>q4<br>');
    function isLowerCase($str)
    {
        for($i=0;$i<strlen($str);$i++)
        {
            if(ord($str[$i])>=97 && ord($str[$i])<=122)
            continue;
            else return false;
        }
        return true;
    }
    if(isLowerCase('aaAAaaabbaAabfasdfasdf'))
    {
        echo('lower case');
    }
    else
    {
        echo('not lower case');
    }
    
    #q5 is same as q4
    #q6
    echo('<br>q6<br>');
    function isArmstrong($num)
    {
        $x=$num;
        $arr=array();
        while($num>0)
        {
            $digit=$num%10;
            $arr[]=$digit;
            $num=floor($num/10);
        }
        $sum=0;
        foreach($arr as $value)
        {
            $sum+=$value*$value*$value;
        }
        if($sum==$x) return true;
        return false;
    }
    if(isArmstrong(407))
    {
        echo('Armstrong!');
    }
    else
    {
        echo('not Armstrong');
    }
    
    #q7
    echo('<br>q7<br>');
    function isPalindrome($str)
    {
        $strWithOutSpaces="";
        for($i= 0;$i<strlen($str);$i++){
            if($str[$i]!=' ')
            $strWithOutSpaces.=$str[$i];
        }
        $strRev="";
        for($i=strlen($str)-1;$i>-1;$i--)
        {
            if($str[$i]==' ') continue;
            else{
                $strRev.=$str[$i];
            }
        }
        //chek if plaindrome
        for($i=0;$i<strlen($strWithOutSpaces);$i++)
        {
              if($strWithOutSpaces[$i]!=$strRev[$i]) return false;
        }
        return true;
    }
    if(isPalindrome('dadz'))    
    echo('yes');
    else echo('no');

    echo('<br>q8<br>');
    function removeDuplicates($arr)
    {
        $arr2=array();
        $falg=true;
        for($i=0;$i<count($arr);$i++)
        {
            $flag=true;
            for($j=$i+1;$j<count($arr);$j++)
            {
                // echo('i='.$i.'j='.$j.'<br>');
                if($arr[$i]==$arr[$j])$flag=false;

            }
            if($flag)
            $arr2[]=$arr[$i];  
        }
        print_r( $arr2);
    } 

    $arr=array(1,2,3,1,2,3,4,0);
    removeDuplicates($arr);
?>