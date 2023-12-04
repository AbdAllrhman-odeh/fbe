<?php
    #q1
    echo('q1<br>');
    $arr=['red','green','white'];
    $text="The memory of that scene for me is like a frame of film forever frozen at that moment: the $arr[0] carpet,
     the $arr[1] lawn, the $arr[2] house, the leaden sky.
     The new president and his first lady. - Richard M. Nixon";
     echo($text);
     echo('<hr>');

     #q2
     echo('q2');
     $arr=['green','red','white'];
     echo('<ul>');
     foreach($arr as $value)
     {
        echo('<li>'.$value.'</li>');
     }
     echo('</ul>');
     echo('<hr>');

     #q3
     echo('q3<br>');
     $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
     asort($cities);
     foreach($cities as $key=>$value)
     {
        echo('The capital of '.$key.' is '.$value.' <br>');
     }

     #q4
     echo('<hr>q4<br>');
     $color = array (4 => 'white', 6 => 'green', 11=> 'red');
     echo($color[4]);
     echo('<hr>');

     #q5
     echo('q5<br>');
     $arr=[1,2,3,4,5,6];
     array_splice($arr,1,0,20);
     print_r($arr);
     echo('<hr>');

     #q6
     echo('q6<br>');
     $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
     asort($fruits);
     print_r($fruits);

     #q7
     echo('<hr>q7<br>');
     $arr=[78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
     $sum=0;
     foreach($arr as $value)
     {
         $sum+=$value;
     }
     $avg=1;
     $avg=($sum*1.0)/count($arr);
     echo($avg);
     sort($arr);
     print_r($arr);
     echo('<br>Lowest five:');
     for($i=0;$i<5;$i++)
     {
      echo($arr[$i].' ');
     }
     echo('<br>');
     echo('Largest five:');
     for($i=count($arr)-1;$i>count($arr)-6;$i--)
     {
      echo($arr[$i].' ');
     }
     echo('<br>');

     #q8
     echo('<hr>q8<br>');
     $array1 = array("color" => "red", 2, 4);
     $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
     $arr3=$array1+$array2;
     print_r($arr3);

     #q9
     echo('<hr>q9<br>');
     $colors = array("RED","BLUE", "WHITE","YELLOW");
     $newColors=[];
     for($i=0;$i<count($colors);$i++)
     {
      $newColors[]=strtolower($colors[$i]);
     }
     print_r($newColors);

     #q10
     echo('<hr>q10<br>');
     $colors = array("red","blue", "white","yellow");
     $newColors=[];
     for($i=0;$i<count($colors);$i++)
     {
      $newColors[]=strtoupper($colors[$i]);
     }
     print_r($newColors);

     #q11
     echo('<hr>q11<br>');
     for($i=200;$i<=250;$i++)
     {
      if($i%4==0) echo($i.' ');
     }

     #q12
     echo('<hr>q12<br>');
     $words =  array("abcd","abc","de","hjjj","g","wer");
     function getShort($arr){
      $count=strlen($arr[0]);
      foreach($arr as $arr)
      {
         if($count>strlen($arr))
         {
            $count=strlen($arr);
         }
      }
      echo('The shortest:'.$count.'<br>');
     }


     function getLonge($arr){
      $count=strlen($arr[0]);
      foreach($arr as $arr)
      {
         if($count<strlen($arr))
         {
            $count=strlen($arr);
         }
      }
      echo('The Longest:'.$count.'<br>');
     }

     getShort($words);
     getLonge($words);

     #q13
     $min=10;
     $max=19;
     echo('<hr>q13<br>');
     for($i=0;$i<10;$i++)
     {
      $num=rand($min,$max);
      echo($num.' ');
     }

     #q14
     echo('<hr>q14<br>');
     $arr=array( 2, 0, 10, 12, 6); 
     sort($arr);
     if($arr[0]==0) echo($arr[1]);
     else echo($arr[0]);
?>
