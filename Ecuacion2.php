<?php

// Recogemos el mensaje del formulario
// Con la función str_split separamos cada caracter del string en una posicion de un array que llamamos
$x2=$_POST['mensaje'];
// transformamos el string en un array
$mensaje=str_split($_POST['mensaje']);

// $mensaje=str_split("BnodJo s, dBneam");



// print_r($mensaje);
// creamos dos array vacias
$final=[];
$inicial=[];

// separamos mediante el modulo de dos (par e impar)
for ($i=0; $i < count($mensaje) ; $i++) { 
    if ($i % 2 == 0) {
        array_push($inicial, $mensaje[$i]);
    } else {
        array_push($final, $mensaje[$i]);
    }
}

// para obtener las letras abra que girar el final con array_reverse
$finalbueno = array_reverse($final);



// print_r($finalbueno);
// ahora si que podemos concatenar los dos arrays creados anteriormente y obtenemos x1
$mensaje1=implode($inicial).implode($finalbueno);

// echo "$mensaje1";

// echo "<script>window.location='Ecuacion1.php';</script>"



