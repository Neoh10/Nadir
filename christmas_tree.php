<html lang="es">
<head>
    <title>Christmas tree</title>
</head>
<body>
<form method="post" action="christmas_tree.php">
    <label>
        Number of flats:
        <input type="text" name="num"/>
    </label>
    <input type="submit"/>
</form>
<div style="background-color: darkgreen; width: min-content">
<?php
    function getFlats($num){
        $contadorVacio = $num;
        $contadorAsteriscos = 1;
        for ($i = 0; $i < $num; $i++) {

            for ($j = 0; $j < $contadorVacio; $j++){
                echo "<span style='color: darkgreen'>A";
            }

            for ($k = 0; $k < $contadorAsteriscos; $k++){
                echo "<span style='color: white'>A";

            }

            for ($l = 0; $l < $contadorVacio; $l++){
                echo "<span style='color: darkgreen'>A";
            }

            echo "</br>";
            $contadorAsteriscos +=2;
            $contadorVacio--;
        }

    }

    if (isset($_POST["num"])) {
        $num = intval($_POST["num"]);
        getFlats($num);
    }