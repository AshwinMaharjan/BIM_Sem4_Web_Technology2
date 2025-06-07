<?php
$color=array("Red","Yellow","Blue","Green");
array_push($color,"Pink","Black");
echo "After push:";
print_r($color); //red yellow blue green pink black

echo "<br><br>";
array_shift($color);
array_shift($color);
echo "After shift:";
print_r($color); //blue green pink black

echo "<br><br>";
$c1=array("White","Brown");
$c2=array_merge($color,$c1);
echo "After merge:";
print_r($c2); //blue green pink black white brown

echo "<br><br>";
$c3=array_slice($c2,2,6);
echo "After slice:";
print_r($c3); //pink black white brown

echo "<br><br>";
sort($color);
echo "After sort:";
print_r($color); //black blue green pink

echo "<br><br>";
$new=array("College"=>"Prime","Faculty"=>"BIM","Roll"=>"B-05",);
asort($new);
echo "After asort:";
print_r($new);

echo "<br><br>";
krsort($new);
echo "After krsort:";
print_r($new);



