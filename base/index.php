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

            <?php  ?>
            <?php for ($i = 0; $i < 100; $i++) : ?>
            <?php echo $i . '<br>'; ?>
            <?php endfor; ?>

            <hr>

            <?php  ?>
            <?php
            for ($i = 0; $i <= 100; $i++) {
              echo $i . '<br>';
            }
            ?>

            <hr>

            <?php
            for ($i = 0; $i <= 100; $i++) {
              if ($i == 5) {
                echo "cinco <br>";
                continue;
              }
              echo $i . '<br>';
            }
            ?>

            <hr>

            <?php  //Para parar el ciclo cuando cumpla una condición
            for ($i = 0; $i <= 100; $i++) {
              if ($i == 5) {
                echo "cinco <br>";
                break;
              }
              echo $i . '<br>';
            }
            ?>

            <hr>

            <?php  //imprimir pares
            for ($i = 0; $i <= 100; $i++) {
              if ($i % 2 == 0) {
                echo "$i <br>";
                continue;
              }
            }
            ?>

            <hr>

            <?php  //imprimir nones
            echo "<h2>Nones</h2>";
            for ($i = 0; $i <= 100; $i++) {
              if ($i % 2 <> 0) {
                echo "$i <br/>";
                continue;
              }
            }
            ?>

            <hr>

            <?php //Uso del for para barrer un arreglo
              $tecnologias = array('CSS','HTML','JavaScript','jQuery','Pyton');

              for ($i=0; $i < count($tecnologias) ; $i++) { 
                echo $tecnologias[$i] . '<br/>';
              }
            ?>
        </div>
    </div>




</body>

</html> 