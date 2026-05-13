<?php
 $conexion=mysqli_connect('localhost','root','','Novus');
 
 
 
 // Formulario 8 Inscripcion de Talleres//


 if (isset($_POST['register'])) {
    if(
        strlen($_POST['id_cliente']) >= 1 &&
        strlen($_POST['apodo_cliente']) >= 1 &&
        strlen($_POST['id_taller']) >= 1 &&
        strlen($_POST['nombre_taller']) >= 1 &&
        strlen($_POST['id_módulo']) >= 1 &&
        strlen($_POST['núm_módulo']) >= 1 &&
        strlen($_POST['fecha_inscripción']) >= 1
      ) {
           $id_cliente = trim($_POST['id_cliente']);
           $apodo_cliente = trim($_POST['apodo_cliente']);
           $id_taller = trim($_POST['id_taller']);
           $nombre_taller = trim($_POST['nombre_taller']);
           $id_módulo = trim($_POST['id_módulo']);
           $núm_módulo = trim($_POST['núm_módulo']);
           $fecha_inscripción = trim($_POST['fecha_inscripción']);
           $consulta = "INSERT INTO inscripción_talleres (`ID_cliente`, `Apodo_cliente`, `ID_taller`, `Nombre_taller`, `ID_módulo`, `Núm_módulo`, `Fecha_inscripción`)
            VALUES('$id_cliente', '$apodo_cliente', '$id_taller', '$nombre_taller', '$id_módulo', '$núm_módulo', '$fecha_inscripción')";
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