<?php
$globalVar = "I'm a global variable";

function variableScope() {
    $localVar = "I'm a local variable";
    static $staticVar = 0;

    global $globalVar;
    
    echo $globalVar . "<br>";
    echo $localVar . "<br>";
    echo "Static variable: $staticVar<br>";
    
    $staticVar++;
}

variableScope();
variableScope();
variableScope();
?>
