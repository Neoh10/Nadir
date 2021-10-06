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
        $divisors = array();
        for($i = 1; $i < $num; $i++) {
            if ($num % $i == 0) {
                $divisors[] = $i;
            }
        }
        return $divisors;
    }

    function isPerfectNum($num){
        return array_sum(getDivisors($num)) == $num;
    }

    if (isset($_POST["num"])) {
        $num = intval($_POST["num"]);
        $i = 0;
        $perfects = array();
        while (count($perfects) < $num){
            $i++;
            if (isPerfectNum($i)){
                $perfects[] = $i;
            }
        }
        echo "First ".$num." perfect numbers are: <br>";
        foreach ($perfects as $perfect) {
            echo "- ".$perfect."<br>";
        }
    }
    ?>
</div>
</body>
</html>
