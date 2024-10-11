<?php
$velocidad = $_GET['velocidad'];
$distancia = $_GET['distancia'];
function tiempo($velocidad, $distancia) {
    return $distancia / $velocidad;
}
echo "El tiempo del viaje es " .tiempo($velocidad, $distancia);
?>
<br>
<a href="calculo.html">Atrás</a>