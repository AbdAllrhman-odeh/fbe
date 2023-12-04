<?php 
    class myClass{
        private $num;
        public function __construct($num)
        {
            $this->num=$num;
        }   
        public function claFact()
        {
            echo('This function will calclute the factorial!<br>');
            $sum=1;
            for($i=1;$i<=$this->num;$i++)
            {
                $sum*=$i;
            }
            echo('factorial is '.$sum.'<br>');
        }
    };

    $obj=new myClass(5);
    $obj->claFact();




?>