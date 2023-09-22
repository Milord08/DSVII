<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Parcial 1 - Ricardo Milord</title>
</head>
<body>
    <?php
    $N = 6;
    $matriz = array();
    for ($i = 0; $i < $N; $i++) {
        $matriz[$i] = array(); 
        for ($j = 0; $j < $N; $j++) {
            $matriz[$i][$j] = 0; 
        }
    }

    for ($i = 0; $i < $N; $i++) {
        for ($j = 0; $j < $N; $j++) {
            if ($j == $i && $j != 0 && $j != $N - 1) {
                $matriz[$i][$j] = rand(101, 200); 
            }
        }
    }

    $sumaDiagonal = 0;
    for ($i = 0; $i < $N; $i++) {
        $sumaDiagonal += $matriz[$i][$i];
    }

    echo "<table border='1'>";
    for ($i = 0; $i < $N; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $N; $j++) {
            echo "<td>{$matriz[$i][$j]}</td>"; 
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "</tr>";

    echo "<p>Suma de la diagonal principal: $sumaDiagonal</p>";
    ?>
</body>
</html>