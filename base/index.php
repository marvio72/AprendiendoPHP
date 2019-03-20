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
               function saludar(){
                 echo "Hola amigos!";
               }
               saludar();

               function suma($a,$b){
                $total = $a + $b;
                return $total;
               }
               echo '<br/>';
               echo suma(6,7);
            ?>
            <h2>Agenda Teléfonica</h2>
            <?php
               function usuario(){
                 echo "Marco Rafael <br/>";
                 echo "3339-5410-57 <br/>";
               }
               usuario();
            ?>

        </div>
    </div>




</body>

</html> 