<?php
$columnas = 10;
$filas = 10;

echo "<table border='1'>";

for($i=1; $i<=$filas; $i++){

    echo "<tr>";

    for($x=1; $x<=$columnas; $x++){
        echo "<td>".$i."*".$x." = ".($i * $x)."</td>";
    }
    echo "</tr>";

}
echo "</table>";

?>

