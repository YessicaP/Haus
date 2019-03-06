<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Conceptos básicos PHP</title>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"> -->
</head>
<body>
  <h1>Conceptos básicos PHP</h1>
  <?php
    //comentario de una línea
    # comentario de una línea
    /*
      comentario
      de
      varias
      lineas
    */
    echo 'Este es un texto escrito y procesado por PHP';
    echo "<p>Otro texto escrito con PHP en un párrafo de HTML</p>";
    echo '
      <div class="card" style="width: 18rem;">
        <img src="https://placeimg.com/640/480/any" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    ';
    /* Conceptos básicos de Programación en PHP */
    ?>
    <h2>Tipos de Datos Básicos en PHP</h2>
    <?php
      echo "
        <ol>
          <li>Cadenas de Texto (String)</li>
          <li>Números (Numbers)</li>
          <li>Booleanos (Booleans)</li>
          <li>Arreglos (Arrays)</li>
        </ol>
      ";
    ?>
    <p>
      Para poder utilizar <b>tipos de datos</b> en PHP es necesario almacenarlos en variables o constantes.
    </p>
    <?php
      //Para declarar una variable en PHP, se utiliza el simbolo del '$';
      $nombre = 'Jonathan'; //String
      $edad = 34; //Number
      $es_programador = true; //Booleans
      //Si quiero unir valores de variables a una cadena de texto, para formar algún mensaje dinámico, puedo usar:
        # La concatenación o
        # la interpolación
      echo '<p>El texto de abajo es un ejemplo en PHP de concatenación</p>';
      echo '<p>Hola mi nombre es '.$nombre.' y tengo '.$edad.' años y ¿soy programador? '.$es_programador.'</p>';
      echo '<p>El texto de abajo es un ejemplo en PHP de interpolación</p>';
      echo "<p>Mi nombre es $nombre y tengo $edad años y ¿soy programador? $es_programador</p>";
    ?>
    <h3>Arreglos</h3>
    <p>
      Los arreglos son un tipo de dato, que nos permite almacenar múltiples valores. Podemos tener arreglos <b>unidimensionales</b> (vector) o <b>multidimensionales</b> (matrices).
    </p>
    <p>
      Adicionalmente a la dimensión de los arreglos, dependiendo del tipo de índice que tengan, estos pueden ser: <b>Arreglos Posicionales</b> y <b>Arreglos Asociativos</b>.
    </p>
    <?php
      $colores = ['negro', 'blanco', 'azul', 'verde', 'rojo', 19, true];
      //echo $colores;
      echo '<pre>';
        var_dump($colores);
      echo '</pre>';
      echo $colores[2];
      echo '<br>';
      echo $colores[0];
      echo '<br>';
      echo count($colores);
      $contacto = array(
        'nombre' => 'Yessica',
        'edad' => 19,
        'email' => 'yessicapalomares@gmail.com',
        'movil' => '26335836',
        'web' => 'yessica.com'
      );
      echo '<pre>';
        var_dump($contacto);
      echo '</pre>';
      echo $contacto['nombre'];
    ?>
</body>
</html>
