<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Programación básica PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" 
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
<body>
    <h1> Conceptos básicos de PHP <h1>
    <?php 
    echo 'Este es un texto escrito y procesado por PHP';
    echo '<p> Otro texto escrito con PHP en un párrafo de HTML</p> ';

    echo '
    <div class='card' style="width:10rem;">-
    </div>';
    
    
    /* Conceptos básicos de Programación en PHP */

    echo '<h2>Tipos de datos en PHP </h2>';
  

    echo '
        <ol>

        <li>Cadenas de texto (Strings)</li>;
        <li>Números (Numbers)</li>;
        <li>Booleanos (Booleans)</li>;
        <li>Arreglos (Arrays)</li>;

        </ol>

   ' ?>


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




https://placeimg.com/   