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
            <h2>Agenda Teléfonica</h2>
            <?php
            function usuario($nombre, $tel){
              echo $nombre . "<br/>";
              echo $tel . "<br/>";
              echo "<hr>";
            }
            usuario('Marco Ruvalcaba','3339-5410-57');
            usuario('Violeta González','3339-5787-77');

            ?>

        </div>
    </div>




 </body>

</html>