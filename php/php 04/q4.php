<?php 
    class myClass{

        public function __construct()
        {
            echo('constructor!<br>');
        }   
        public function orderd($num)
        {
            echo('here are the order function<br>');
            sort($num);
            print_r($num);
        }
    };

    $arr=[1,3,-1,0,5];
    $obj=new myClass();
    $obj->orderd($arr);





?>