<?php
    abstract class Fruit{
        public $name;
        public $color;
        public function __construct($name,$color){
            $this->name=$name;
            $this->color=$color;
        }
        abstract public function showMessage(); //abstract method
    }

    class Apple extends Fruit{ //inheritance
         public function showMessage(){
            echo "Hello, my name is Ashwin Maharjan.";
            echo "<br>";
            echo "The fruit name is: {$this->name}";
            echo "<br>";
            echo "The fruit color is: {$this->color}";
         }
    }

    $obj=new Apple("Apple","red");
    $obj->showMessage();

?>