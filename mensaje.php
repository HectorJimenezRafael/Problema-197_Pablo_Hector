<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- hoja de estilos -->
    <link rel="stylesheet" href="css/mensaje.css">
    <title>Document</title>
</head>

<body>
    <h4>
    <?php
    require "Ecuacion2.php";
    require "Equacion1.php";
    echo "x2 = $x2";
    echo"<br>";
    echo "x2 -> x1 =>$mensaje1";
   

    ?>
    </h4>
        <h1>
            MENSAJE <span>ORIGINAL</span>
           
        </h1>
        <h2>
        <?php
 echo "x1->x =>$mensajeFinal";
            ?>

</h2>
        <div class="cards-grid">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front" style="background-image:url('img/pablo.jpeg');" >

                    </div>
                    <div class="flip-card-back">
                       <p>DETECTIVE 1</p>
                       <p>Nombre: Pablo</p>
                       <p>Apellidos: González Rodríguez</p>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front" style="background-image: url('img/Hector.jpeg');" >

                    </div>
                    <div class="flip-card-back">
                    <p>DETECTIVE 2</p>
                       <p>Nombre: Hèctor</p>
                       <p>Apellidos: Jiménez Rafael</p>
                    </div>
                </div>
            </div>

            
        </div>



</body>

</html>