<?php 
    class myClass{
        private $name;
        public function __construct($name)
        {
            $this->name=$name;
            echo('Hello, iam '.$this->name.'<br>');    
        }
    };

    $obj=new myClass('scoot');

?>