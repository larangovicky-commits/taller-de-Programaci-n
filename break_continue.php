<?php

$c=1;
while($c<=20){
    echo $c. "<br>";
    if($c==10){
        break;
    }
    $c++;
}

///

$pc=["SD","SSD", "GPU", "RAM", "CPU"];
foreach($pc as $componente){
    if($componente=="GPU"){
        continue;
    }
    echo $componente. "<br>";
}

///

for($f=1; $f<=10; $f++){
    if($f==5){
        continue;
    }
    echo $f. "<br>";
}

///

$i=1;
while($i<=10){
    if($i==3){
        $i++;
        continue;
    }
    echo $i. "<br>";
    $i++;
}