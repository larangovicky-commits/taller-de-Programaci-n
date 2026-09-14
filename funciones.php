<?php


function saludo(){
    echo "Hola, mi nombre es: Carlos";
}

///

function saludo(){
    echo "Hola, mi nombre es: Carlos";
}
saludo();
saludo();
saludo();

///
function saludo(){
    echo "Hola, mi nombre es: Carlos";
}
$saludo=saludo();
echo $saludo;

///

function saludo(){
    return "Hola, mi nombre es: Carlos";
}
saludo();
echo $saludo;

///

function saludo($nombre){
    return "Hola, mi nombre es: $nombre";
}
saludo("Nicole");

