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
              // versiones anteriores
               $tecnologias = ['CSS','HTML','JavaScript','jQuery'];
               //print_r($tecnologias);
              // nuevas versiones
            ?>
              <pre><?php print_r($tecnologias);?></pre>
              
            <?php  
              echo "<hr>";
              $lenguajes = array('CSS','JQuery','HTML','JavaScript','JNode','PHP',20);
              //echo $lenguajes[4];
            ?>

            <pre>
              <?php var_dump($lenguajes); ?>
            </pre>
        </div>
    </div>



 
</body>

</html>