<?php
 $conexion=mysqli_connect('localhost','root','','Novus');
 
 
  // Formulario 13 Asignaciones de Talleres//


 if (isset($_POST['register'])) {
    if(
        strlen($_POST['id_taller']) >= 1 &&
        strlen($_POST['nombre_taller']) >= 1 &&
        strlen($_POST['id_empleado']) >= 1 &&
        strlen($_POST['nombre_facilitador']) >= 1
      ) {
           $id_taller = trim($_POST['id_taller']);
           $nombre_taller = trim($_POST['nombre_taller']);
           $id_empleado = trim($_POST['id_empleado']);
           $nombre_facilitador = trim($_POST['nombre_facilitador']);
           $consulta = "INSERT INTO asignaciones_talleres (`ID_taller`, `Nombre_taller`, `ID_empleado`, `Nombre_facilitador`)
            VALUES('$id_taller', '$nombre_taller', '$id_empleado', '$nombre_facilitador')";
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