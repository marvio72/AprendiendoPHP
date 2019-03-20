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
            $nombre = "Marco";
            $apellido = "Ruvalcaba";
            $edad = 47;
            echo $nombre . ' ' . $apellido;
            echo "<br>";
            echo "$nombre $apellido";
            echo "<hr>";
            echo "$nombre edad: $edad";
            echo "<br>";
            echo $nombre . " edad: " . $edad;


            ?>

        </div>
    </div>




</body>

</html> 