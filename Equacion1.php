<?php
// $primeraEQ= str_split($_POST['mensaje1']);
$primeraEQ= str_split("BoJ ,dnameB sodn");
array_push($primeraEQ,".");
// print_r($primeraEQ);
$vocales= ["A","E","I","O","U","a","e","i","o","u","."];


$cont=0;
$original=[];

for ($i=0; $i < count($primeraEQ) ; $i++) { 

    // Si es vocal
    if (in_array($primeraEQ[$i],$vocales)) {
        if (!empty($conso)) {
            // print_r($conso);
             $consoBueno=array_reverse($conso);
            foreach ($consoBueno as $key) {
                array_push($original,$key);
            }    
        }
        // subimos la vocal 
        $valor=$primeraEQ[$i];
        array_push($original,$valor);
         //reiniciamos contador de consonantes 
        $cont=0;
        // echo$cont;
        
        // antes de reiniciar la array de conso pq encuentra nueva vocal, subimos este array a la inversa
        
        
        // hemos encontrado una vocal por lo tanto reiniciamos el array de consonantes
        $conso=[];
       
        
    }else { //es consonante
       
        // sumamos uno al contador
        $cont ++;
       
        if ($cont==1) {
            // Hay dos opciones para el que el contador sea 1, que después de la consonante vaya vocal o que sea la primera consonante de una cadena de consonantes. Con este bucle lo diferenciamos
            if (in_array($primeraEQ[$i+1],$vocales)) {
                $valor=$primeraEQ[$i];
                array_push($original,$valor);
            }else {
               
                    $valor=$primeraEQ[$i];
                    array_push($conso,$valor);
               
               
            }
            
            
        }else{
           
                
           
             $valor=$primeraEQ[$i];
             array_push($conso,$valor);
                
            
            
        }
        
       
    }
    // print_r($conso);

}
$punto=count($original);
unset($original[$punto-1]);

$mensajeFinal=implode($original);
echo $mensajeFinal;

// $original=[];
// $valor="a";
// array_push($original,$valor);
// print_r($original);