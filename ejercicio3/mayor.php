<?php

$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
$n3 = $_GET["n3"];

if ($n1 > $n2 && $n1 > $n3){
    echo "El número mayor es ".$n1;
}else if($n2 > $n3){
    echo "El número mayor es ".$n2;
}else{
    echo "El número mayor es ".$n3;
}

?>
<br>
<a href="mayor.html"></a>