<?php

$número = $_GET["número"];
$mul;

if($número > 10 || $número < 1){
    echo "El número debe ser entre 1 y 10.<br>
    Vuelva e introduzca un número válido.";
}else{
    echo "Tabla del ".$número."<br>";
    echo "--------------------<br>";
    for($i = 0; $i <= 10; $i++){
        $mul = $número * $i;
        echo $número." x ".$i." = ".$mul."<br>";
        
    }
}

?>
<br>
<a href="tabla_multiplicar.html">Atrás</a>