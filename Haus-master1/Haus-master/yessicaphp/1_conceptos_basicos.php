<!DOCTYPE html>
 <html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Programación básica PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
    <h1> Conceptos básicos de PHP <h1>
    <?php
    //comentario de una línea
    #comentario de una línea
    /*comentario
    de
    varias
    lineas
    */

    echo 'Este es un texto escrito y procesado por PHP';
    echo '<p> Otro texto escrito con PHP en un párrafo de HTML</p> ';

    echo '
    <div class="card" style="width: 10rem;">
    <img src="https://placeimg.com/640/480/any" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title"> Card title </h5>
    <p class="card-text">Some quick example text tto build on the card title and make up the
     bulk of the card\´s content.</p>
     <a href="#" class="btn btn-primary">Go somewhere</a>

       </div>
    </div>';


    /* Conceptos básicos de Programación en PHP */

    ?>
    <h2>Tipos de Datos Básicos en PHP</h2>
    <?php
    echo "

        <ol>

        <li>Cadenas de texto (Strings)</li>;
        <li>Números (Numbers)</li>;
        <li>Booleanos (Booleans)</li>;
        <li>Arreglos (Arrays)</li>;

        </ol>

    ";

      ?>

      <p>
        Para poder utilizar <b>tipos de datos</b> en PHP es necesario
        almacenarlos en variables o constantes.
      </p>


   <?php

    //Para declarar un variable en PHP se utiliza el símbolo del dólar ($);

    $nombre = 'Yessica'; //string

    $edad = 19; //numérico

    $es_programador = true; //booleans

    //Si quiero unir variables a una cadena de texto,para formar algún mensaje dinámico, puedo usar:
        #La concatenación
        #La interpolación
    echo '<p> El texto de abajo es un ejemplo, en php, de concatenación </p>';
    echo '<p> Hola, mi nombre es '.$nombre.' y tengo '.$edad.' años y ¿Soy programador? '.$es_programador.' </p>';
    echo '<p> Mi nombres es $nombre y tengo años y ¿Soy programador? $es_programador </p>'

?>


</body>
</html>
