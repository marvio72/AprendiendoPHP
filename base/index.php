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
            <?php $premiere_leage = array('chelsea', 'manchester city', 'manchester united', 'tottenham', 'arsenal', 'liverpool', 'leicester'); ?>



            <?php
            $i = 0;
            while ($i <= count($premiere_leage)) {
              if (count($premiere_leage) > 0) {
                if ($i == count($premiere_leage)) {
                  break;
                }
                echo "$premiere_leage[$i] <br/>";
                if ($i + 1 === count($premiere_leage)) {
                  echo "fin";
                }
              } else {
                echo "no hay resultados";
              }
              $i++;
            }
            ?>

        </div>
    </div>




</body>

</html> 