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

        <?php $resultado = $_POST; ?>
        <?php $nombre    = $resultado['nombre']; ?>
        <?php $apellido  = $resultado['apellido']; ?>

        <?php
        // Validar inputs
        if (!(filter_has_var(INPUT_POST, 'nombre') && (strlen(filter_input(INPUT_POST, 'nombre')) > 0) &&
            trim($nombre) != '')) {
            echo "El nombre es obligatorio";
        } else { ?>
        <p>Nombre: <?php echo $nombre; ?></p>
        <?php 
    } ?>
        <!-- La manera mas sensilla igualmente poderosa -->
        <?php if (isset($apellido) && trim($apellido) != '') { ?>
        <p>Apellido: <?php echo $apellido; ?></p>
        <?php 
    } else {
        echo "El apellido es obligatorio";
    }  ?>

        <hr>

        <?php
           // Validar un checkbox
        if (isset($_POST['notificaciones'])) {
            $notificaciones = $_POST['notificaciones'];
            if ($notificaciones == 'on') {
                echo "Se ha inscrito correctamente a las notificaciones <br/>";
            }
        }
        ?>
        <?php
           // Validar array de checkboxex
        if (isset($_POST['curso'])) {
            $cursos = $_POST['curso'];
            echo "Tus cursos son: <br/>";
            foreach ($cursos as $curso) {
                echo $curso . '<br/>';
            }
        } else {
            echo "No elegiste cursos <br/>";
        };
        ?>

        <?php
           // Validar valores de un Select
        if (isset($_POST['area'])) {
            $area = $_POST['area'];
            if ($area != '- Selecciona una area -') {
                echo "<h2>Area de Especialización</h2>";
                switch ($area) {
                    case 'fe':
                        echo "Front End <br/>";
                        break;
                    case 'be':
                        echo "Back End <br/>";
                        break;
                    case 'fs':
                        echo "Full Stack";
                        break;

                    default:
                        echo "Selecciona una area <br/>";
                        break;
                }
            } else {
                echo '<hr>';
                echo "No haz seleccionado una especialidad <br/>";
            }
        }
        ?>

        <?php  ?>

        <?php $opciones = array(
            'pres' => 'presencial',
            'online' => 'En Línea'
        ); ?>

        <?php
        if (isset($_POST['opciones'])) {
            $tipo_curso = $_POST['opciones'];
            echo '<h2>Tipo de Curso elegido</h2>';
            switch ($tipo_curso) {
                case 'pres':
                    echo "Elegiste Presencial <br/>";
                    break;
                case 'online':
                    echo "Elegiste En linea <br/>";
                    break;
            }
        } else {
            echo '<hr>';
            echo "No elegiste tipo de Curso";
        }
        ?>

        <?php  ?>
        <?php
        if (isset($_POST['mensaje'])) {
            $mensaje = $_POST['mensaje'];
            if (strlen($mensaje) > 0 && trim($mensaje)) {
                echo '<h2>Mensaje</h2>';
                echo $mensaje;
            } else {
                echo '<hr>';
                echo 'El mensaje esta vacio <br/>';
            }
        }
        ?>

        <!-- <?php var_dump($_POST); ?> -->

    </div>




</body>

</html> 