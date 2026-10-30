<?php

$num=[10,5,25,7,3];
$suma=0;
for ($i=0;$i<count($num);$i++){
    $suma+=$num[$i];
}

echo $suma/count($num);