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
        for ($i = 1; $i < $num; $i++) {
                echo "*";
            for($j = 0; $j < $i; $j++) {
                echo "*";
            }

        }
        echo "<br/>";
    }