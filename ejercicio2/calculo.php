<?php
$velocidad = $_GET['velocidad'];
$distancia = $_GET['distancia'];
function tiempo($velocidad, $distancia) {
    return $distancia / $velocidad;
}
echo "El tiempo que tomará el viaje es de " .tiempo($velocidad, $distancia)." horas.";
?>
<br>
<a href="calculo.html">Atrás</a>