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
<div>
<?php
    function getFlats($num){
        $contadorVacio = $num;
        $contadorAsteriscos = 1;
        for ($i = 0; $i < $num; $i++) {

            for ($j = 0; $j < $contadorVacio; $j++){
                echo " ";
            }

            for ($k = 0; $k < $contadorAsteriscos; $k++){
                echo "*";
            }

            for ($j = 0; $j < $contadorVacio; $j++){
                echo " ";
            }

            echo "</br>";
        }

    }

    if (isset($_POST["num"])) {
        $num = intval($_POST["num"]);
        getFlats($num);
    }