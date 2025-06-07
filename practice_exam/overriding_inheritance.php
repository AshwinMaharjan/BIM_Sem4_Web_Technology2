<?php
    class Fruit{
        public $name;
        public $color;
        public function __construct($name,$color){
            $this->name=$name;
            $this->color=$color;
        }
    }
    class Apple extends Fruit{ //inheritance
        public $weight;
        public function __construct($name,$color,$weight){ //overrding abstract method
            $this->name=$name;
            $this->color=$color;
            $this->weight=$weight;
        }
         public function showMessage(){
            echo "Hello, my name is Ashwin Maharjan.";
            echo "<br>";
            echo "The fruit name is: {$this->name}";
            echo "<br>";
            echo "The fruit color is: {$this->color}";
            echo "<br>";
            echo "The fruit weight is: {$this->weight}";
         }
    }
    $obj=new Apple("Apple","red",70);
    $obj->showMessage();
?>