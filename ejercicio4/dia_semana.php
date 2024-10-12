<?php

$número = $_GET["número"];

if($número < 1 || $número > 7){
    echo "El número introducido debe ser entre 1 y 7.<br>Vuelva atrás y pruebe de nuevo.";
}else{
    switch ($número){
        case 1:
            echo "El día de la semana es Lunes";
            break;
        case 2:
            echo "El día de la semana es Martes";
            break;
        case 3:
            echo "El día de la semana es Miércoles";
            break;
        case 4:
            echo "El día de la semana es Jueves";
            break;
        case 5:
            echo "El día de la semana es Viernes";
            break;
        case 6:
            echo "El día de la semana es Sábado";
            break;
        default:
            echo "El día de la semana es Domingo";
    }
}



?>
<br>
<a href="dia_semana.html">Atrás</a>