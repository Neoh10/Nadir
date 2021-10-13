<?php

    $numeros = array(2554,39,700,405,56,67,268,111,10,9,2,11,556,367,167,7);
    $arrLen = count($numeros);

    echo "Array sin ordenar: " . "</br>";
    echo "</br>";
    print_r($numeros);


    for ($i = 0; $i < $arrLen; $i++){

        for($j = $i + 1; $j < $arrLen; $j++){

            $posMin = $i;

            if($numeros[$j] < $numeros[$posMin]){

                $posMin = $j;

            }

            $aux = $numeros[$i];
            $numeros[$i] = $numeros[$posMin];
            $numeros[$posMin] = $aux;

        }

    }

    echo "</br>";
    echo "</br>";
    echo "</br>";
    echo "</br>" . "Array ordenado: " . "</br>";
    echo "</br>";
    print_r($numeros);