<?php

    $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

    $dias = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

    for ($i=1;$i<=10;$i++){
        $pos=rand(0,11);
        $mes=$meses[$pos];
        $dia=rand(1,$dias[$pos]);
        echo "$dia de $mes de 2026<br>";
    }
    
