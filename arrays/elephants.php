<?php
$contents = file_get_contents("https://dawsonferrer.com/allabres/apis_solutions/elephants.php");
$elephants = json_decode($contents, true);

function getSortedElephantsByNumber($elephants){
    // return an array of elephants sorted by it's number (ascending order).
    //NOTES 1: You receive a elephants multidimensional array, you can view it's content with var_dump() function.
    //NOTES 2:You CAN'T use any sorting PHP built-in function.
    $sortedByNumber = array();
    for ($i = 0; $i < count($elephants); $i++) {
        $sortedByNumber[$i]["number"] = $elephants[$i]["number"];
        $sortedByNumber[$i]["name"] = $elephants[$i]["name"];
        $sortedByNumber[$i]["species"] = $elephants[$i]["species"];
    }
    for ($j = 0; $j < count($sortedByNumber)-1; $j++) {
        for ($k = $j+1; $k < count($sortedByNumber); $k++)
            if ($sortedByNumber[$k] < $sortedByNumber[$j]) {
                $aux = $sortedByNumber[$j];
                $sortedByNumber[$j] = $sortedByNumber[$k];
                $sortedByNumber[$k] = $aux;
            }
    }
    return $sortedByNumber;
}

?>

<html lang="es">
<head>
    <title>Elephants</title>
    <style>
        table, th, td {
            border: 1px solid black;
            padding-left: 5px;
            padding-right: 5px;
        }
        table {
            border-collapse: collapse;
        }
        thead {
            background-color: aquamarine;
        }
        tbody {
            background-color: aqua;
        }
    </style>
</head>
<body>
<table>
    <thead>
    <tr>
        <!-- logic to print the number of elephants -->
        <th colspan="6">Elephants (<?php echo count($elephants) ?>)</th>
    </tr>
    <tr>
        <th colspan="3">Unsorted elephants</th>
        <th colspan="3">Sorted elephants</th>
    </tr>
    <tr>
        <th>Number</th>
        <th>Name</th>
        <th>Species</th>
        <th>Number</th>
        <th>Name</th>
        <th>Species</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $sorted = getSortedElephantsByNumber($elephants);
    // print the table body.
    for ($i = 0; $i < count($elephants); $i++) {
        echo "<tr>
                          <td>" . $elephants[$i]["number"] . "</td>
                          <td>" . $elephants[$i]["name"] . "</td>
                          <td>" . $elephants[$i]["species"] . "</td>
                          <td>" . $sorted[$i]["number"] . "</td>
                          <td>" . $sorted[$i]["name"] . "</td>
                          <td>" . $sorted[$i]["species"] . "</td>
                      </tr>" ;
    }
    ?>
    </tbody>
</table>
</body>
</html>