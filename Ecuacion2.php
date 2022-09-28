<?php

// $mensaje=str_split("BnodJo s, dBneam");

// Recogemos el mensaje del formulario
// Con la función str_split separamos cada caracter del string en una posicion de un array que llamamos
$mensaje=str_split($POST_["mensaje"]);


// print_r($mensaje);
$final=[];
$inicial=[];


for ($i=0; $i < count($mensaje) ; $i++) { 
    if ($i % 2 == 0) {
        array_push($inicial, $mensaje[$i]);
    } else {
        array_push($final, $mensaje[$i]);
    }
}


$finalbueno = array_reverse($final);



print_r($finalbueno);

$mensaje1=implode($inicial).implode($finalbueno);

echo "$mensaje1";

echo "<script>window.location='Ecuacion1.php';</script>"



