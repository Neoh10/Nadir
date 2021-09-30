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
    $primes = array(15);
    function getDivisors($num){
        if (isset($_POST["num"])) {
            $num = intval($_POST["num"]);
            for($i = 1; $i < $num; $i++){
                if ($num % $i == 0){
                    $primes[] = $i;
                }
            }
        }
    }

    function isPrimeNum($num){
        if ($num == 1)
            return 0;
        for ($i = 2; $i <= $num/2; $i++){
            if ($num % $i == 0)
                return 0;
        }
        return 1;
    }

    if (isset($_POST["num"])) {
        $num = intval($_POST["num"]);
        //TODO: YOUR CODE HERE
    }
    ?>
</div>
</body>
</html>