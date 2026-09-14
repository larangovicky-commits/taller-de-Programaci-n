<?php

$cantidad1=12732.77;
$cantidad2=1931.81;

//number_format(cantidad,decimales,sep_decimal,sep_millar);

echo number_format($cantidad1);

///
$cantidad3=12732.77;
$cantidad4=1931.81;

//number_format(cantidad,decimales,sep_decimal,sep_millar);

$cantidad3=number_format($cantidad3,2);
$cantidad3;

///
$cantidad5=12732.77;
$cantidad6=1931.81;

//number_format(cantidad,decimales,sep_decimal,sep_millar);

$cantidad6=number_format($cantidad6,2,".","," );
$cantidad6;

////

$cantidad5=12732.77;
$cantidad6=1931.81;

//number_format(cantidad,decimales,sep_decimal,sep_millar);

$cantidad6=number_format($cantidad6,2,".","");
$cantidad6;
