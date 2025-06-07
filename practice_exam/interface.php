<?php

interface parent1{
    public function add($num1,$num2);
}
interface parent2{
    public function sub($num3,$num4);
}
interface parent3{
    public function mul($num5,$num6);
}
class childClass implements parent1,parent2,parent3{
    public function add($num1,$num2){
        echo $num1+$num2;
        echo "<br>";
    }
    public function sub($num3,$num4){
        echo $num3-$num4;
        echo "<br>";
    }
    public function mul($num5,$num6){
        echo $num5*$num6;
    }
}
$obj=new childClass();
$obj->add(5,5); //10
$obj->sub(5,5); //0
$obj->mul(5,5); //25
?>