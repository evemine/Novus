<?php
 $conexion=mysqli_connect('localhost','root','','Novus');
 
 
// Formulario 7 Inscripcion de Servicios//


 if (isset($_POST['register'])) {
    if(
        strlen($_POST['id_cliente']) >= 1 &&
        strlen($_POST['apodo_cliente']) >= 1 &&
        strlen($_POST['id_servicio']) >= 1 &&
        strlen($_POST['tipo_servicio']) >= 1 &&
        strlen($_POST['fecha_inscripción']) >= 1
      ) {
           $id_cliente = trim($_POST['id_cliente']);
           $apodo_cliente = trim($_POST['apodo_cliente']);
           $id_servicio = trim($_POST['id_servicio']);
           $tipo_servicio = trim($_POST['tipo_servicio']);
           $fecha_inscripción = trim($_POST['fecha_inscripción']);
           $consulta = "INSERT INTO inscripción_servicios (`ID_cliente`, `Apodo_cliente`, `ID_servicio`, `Tipo_servicio`, `Fecha_inscripción`)
            VALUES('$id_cliente', '$apodo_cliente', '$id_servicio', '$tipo_servicio', '$fecha_inscripción')";
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