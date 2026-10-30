<?php

$longitud1=$_POST['long1'];
$longitud2=$_POST['long2'];

$numeros1=[];
$numeros2=[];

if ($longitud1==$longitud2){
    for ($i=0;$i<$longitud1;$i++){
        $numeros1[]=rand(1,10);
        $numeros2[]=rand(1,10);
    }
    var_dump($numeros1);
    var_dump($numeros2);
}else{
    echo "No se pueden multiplicar. Dimensiones diferentes";
}
