<?php
 $conexion=mysqli_connect('localhost','root','','Novus');
 
//Formulario 1 Asistencia//

 if (isset($_POST['register'])) {
    if(
        strlen($_POST['id_cliente']) >= 1 &&
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellido']) >= 1 &&
        strlen($_POST['apodo']) >= 1 &&
        strlen($_POST['tipo_servicio']) >= 1 &&
        strlen($_POST['asistencia']) >= 1 &&
        strlen($_POST['repuso']) >= 1 &&
        strlen($_POST['fecha']) >= 1
      ) {
           $id_cliente = trim($_POST['id_cliente']);
           $nombre = trim($_POST['nombre']);
           $apellido = trim($_POST['apellido']);
           $apodo = trim($_POST['apodo']);
           $tipo_servicio = trim($_POST['tipo_servicio']); 
           $asistencia = trim($_POST['asistencia']); 
           $repuso = trim($_POST['repuso']);
           $fecha = trim($_POST['fecha']);
           $consulta = "INSERT INTO asistencia (`ID_cliente`, `Nombre(s)`, `Apellidos`, `Apodo`, `Tipo_servicio`, `Asistió`, `Repuso`, `Fecha`)
            VALUES('$id_cliente','$nombre', '$apellido', '$apodo', '$tipo_servicio','$asistencia', '$repuso', '$fecha')";
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