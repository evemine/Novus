<?php
 $conexion=mysqli_connect('localhost','root','','Novus');
 

 // Formulario 5 Grupos//


 if (isset($_POST['register'])) {
    if(
        strlen($_POST['id_taller']) >= 1 &&
        strlen($_POST['nombre_taller']) >= 1 &&
        strlen($_POST['nombre_modulo']) >= 1 &&
        strlen($_POST['id_modulo']) >= 1 &&
        strlen($_POST['horario']) >= 1 &&
        strlen($_POST['dia']) >= 1 &&
        strlen($_POST['nombre_empleado']) >= 1 &&
        strlen($_POST['aula']) >= 1 &&
        strlen($_POST['numero_alumnos']) >= 1
      ) {
           $id_taller= trim($_POST['id_taller']);
           $nombre_taller = trim($_POST['nombre_taller']);
           $nombre_modulo = trim($_POST['nombre_modulo']);
           $id_modulo = trim($_POST['id_modulo']); 
           $horario = trim($_POST['horario']); 
           $dia = trim($_POST['dia']);
           $nombre_empleado = trim($_POST['nombre_empleado']);
           $aula = trim($_POST['aula']);
           $numero_alumnos = trim($_POST['numero_alumnos']);
           $consulta = "INSERT INTO grupos (`ID_taller`, `Nombre_taller`, `Nombre_módulo`, `ID_módulo`, `Horario`, `Día`, `Nombre_empleado`, `Aula`, `Núm_alumnos`)
            VALUES('$id_taller', '$nombre_taller', '$nombre_modulo', '$id_modulo','$horario', '$dia', '$nombre_empleado', '$aula', '$numero_alumnos')";
            $resultado = mysqli_query($conexion, $consulta);
            if ($resultado) {
            ?>
            <h3 class="success" >El registro se ha completado</h3>
            <?php
            } else {
                ?>
                <h3 class="error">Ocurrio un error</h3>
                <?php
            }

        }

 }
 ?>