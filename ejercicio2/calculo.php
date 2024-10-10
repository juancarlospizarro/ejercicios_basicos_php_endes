<?php
$velocidad = $_GET['velocidad'];
$distancia = $_GET['distancia'];
function tiempo($velocidad, $distancia) {
    return $distancia / $velocidad;
}
echo "El tiempo del viaje es " .tiempo($velocidad, $distancia);
?>

<a href="calculo.html">Atrás</a>