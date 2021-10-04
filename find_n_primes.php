<html lang="es">
<head>
    <title>Find N prime numbers</title>
</head>
<body>
<form method="post" action="find_n_primes.php">
    <label>
        Number:
        <input type="text" name="num"/>
    </label>
    <input type="submit"/>
</form>
<div>
    <?php

    function getDivisors($num){
        for($i = 1; $i < $num; $i++){
            if ($num % $i == 0){
                return $i;
            }
        }
    }

    function isPrimeNum($num){
        $count = 0;

        for ($i = 2; $count < $num / 2; $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }

        return true;
    }


    if (isset($_POST["num"])) {
        $num = intval($_POST["num"]);
        isPrimeNum($num);
    }
    // sssssssssssssssssssssss
    ?>
</div>
</body>
</html>