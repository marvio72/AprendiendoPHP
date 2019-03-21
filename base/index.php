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
                $agenda = array();

                 function guardarUsuario($nombre,$tel){
                 global $agenda;
                 $agenda[] = array($nombre,$tel);
               }

                  guardarUsuario("Marco","123456");
                  guardarUsuario("Juan","99393008");
                  guardarUsuario("Violeta","1234789");

                  function mostrarUsuario($id){
                    global $agenda;
                    $usuario = $agenda[$id];
                    foreach ($usuario as $user) {
                      echo $user . '<br/>';
                    }
                  }

                  mostrarUsuario(2);

                 

            ?>
            
        </div>
    </div>




 </body>

</html>