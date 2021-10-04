<html lang="es">
<head>
    <title>Find N perfect numbers</title>
</head>
<body>
<form method="post" action="find_n_perfects.php">
    <label>
        Number:
        <input type="text" name="num"/>
    </label>
    <input type="submit"/>
</form>
<div>
    <?php
    function getDivisors($num){

    }

    function isPerfectNum($num){

    }

    if (isset($_POST["num"])) {
        $num = intval($_POST["num"]);

    }
    ?>
</div>
</body>
</html>
