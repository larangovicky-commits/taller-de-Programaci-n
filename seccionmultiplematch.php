<?php

$a=7;

$x=10;
$y=9;
$z=7;

$resultado = match($a){
    $x => "Valor igual a x" ."<br>",
    $y => "Valor igual a y" ."<br>",
    $z => "Valor igual a z" ."<br>",
    default => "No coincide con ninguna variable" ."<br>"
};
echo $resultado;

///

$edad=18;

$resultado = match(true){
    $edad >= 60 => "Eres de la tercera edad" ."<br>",
    $edad >= 30 =>"Eres adulto" ."<br>",
    $edad >= 18 =>"Eres adulto joven" ."<br>",
    default => "Eres un nño" ."<br>"
};
echo $resultado;