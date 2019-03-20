<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
</head>

<body>

    <div class="contenedor">
        <h1>Aprendiendo PHP</h1>

        <div class="contenido">

            <?php

            $tecnologias = ['CSS', 'HTML', 'JavaScript', 'jQuery'];
            ?>

            <pre><?php print_r($tecnologias); ?></pre>
            <!-- Incrementamos un elemento al final del arreglo -->
            <?php $tecnologias[] = 'Pyton'; ?>
            <?php $tecnologias[] = 'Java'; ?>

            <pre><?php print_r($tecnologias); ?></pre>

            <?php  ?>
            <?php $java = array_pop($tecnologias); ?>
            <h1><?php echo $java; ?></h1>

            <pre>
              <?php print_r($tecnologias); ?>
            </pre>

            <?php
               // Borrar el primer elemento o cualquier elemento
            unset($tecnologias[0]);
            ?>
            <pre>
              <?php print_r($tecnologias); ?>
            </pre>


            <?php
               //Borra el primer elemento y lo agrega a una variable
            $html = array_shift($tecnologias);
            ?>
            <h1><?php echo $html; ?></h1>
            <pre>
              <?php print_r($tecnologias); ?>
            </pre>

            <?php //Remover ciertos elementos y agregar otos, el elemento eliminado lo asignamos a una variable ?>
            <?php $array = array_splice($tecnologias, 1, 1, array('AngularJS','JQuery','Ionic')); ?>
            <pre>
              <?php print_r($array); ?>
            </pre>
            <pre>
              <?php print_r($tecnologias); ?>
            </pre>

        </div>
    </div>




</body>

</html> 