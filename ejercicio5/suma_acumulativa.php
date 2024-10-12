<?php

$número = $_GET["número"];
$suma;

for ($i = 1; $i <= $número; $i++) {
    $suma = $suma + $i;
}

echo "La suma acumulativa es de ".$suma;
?>
<br>
<a href="suma_acumulativa.html">Atrás</a>