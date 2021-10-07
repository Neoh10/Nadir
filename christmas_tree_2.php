<html lang="es">
<head>
    <title>Get divisors</title>
</head>
<body>
<form method="post" action="christmas_tree_2.php
">
    <label>
        Number of flats:
        <input type="text" name="num"/>
    </label>
    <input type="submit"/>
</form>
<div>
    <?php

    function tree($num) {

        for ($i = 1; $i <= $num; $i++) {

            for ($j = 1; $j <= $num-$i; $j++) {
                echo "&nbsp" . "&nbsp;";
            }
            for ($k = 1; $k <= $i; $k++) {
                echo "*";
            }
            for ($k = 2; $k <= $i; $k++) {
                echo "*";
            }
            for ($l = 1; $l <= $num-$i; $l++) {
                echo "&nbsp" . "&nbsp;";
            }
            echo "<br>";
        }

    }

    if (isset($_POST["num"])) {
        $num = intval($_POST["num"]);
        tree($num);
    }
    ?>
</div>
</body>
</html>