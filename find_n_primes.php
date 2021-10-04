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
                $array = array();
                for($i = 1; $i <= $num; $i++) {
                    if ($num % $i == 0) {
                        $array[] = $i;
                    }
                }
                return $array;
            }

            function isPrimeNum($num){
                /*if (count(getDivisors($num)) == 2){
                    return true;
                }
                return false;*/
                return count(getDivisors($num)) == 2;
            }
            if (isset($_POST["num"])) {
                $num = intval($_POST["num"]);
                $i = 0;
                $primes = array();
                while (count($primes) < $num){
                    $i++;
                    if (isPrimeNum($i)){
                        $primes[] = $i;
                    }
                }
                echo "First ".$num." prime numbers are: <br>";
                foreach ($primes as $prime) {
                    echo "- ".$prime."<br>";
                }
            }
            ?>
        </div>
    </body>
</html>