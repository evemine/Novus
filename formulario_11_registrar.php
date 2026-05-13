<?php
 $conexion=mysqli_connect('localhost','root','','Novus');
 
 
  // Formulario 11 Servicios//


 if (isset($_POST['register'])) {
    if(
        strlen($_POST['tipo_servicio']) >= 1 &&
        strlen($_POST['descripción']) >= 1 &&
        strlen($_POST['modalidad']) >= 1 &&
        strlen($_POST['precio']) >= 1
      ) {
           $tipo_servicio = trim($_POST['tipo_servicio']);
           $descripción = trim($_POST['descripción']);
           $modalidad = trim($_POST['modalidad']);
           $precio = trim($_POST['precio']);
           $consulta = "INSERT INTO servicios (`Tipo_servicio`, `Descripción`, `Modalidad`, `Precio`)
            VALUES('$tipo_servicio', '$descripción', '$modalidad', '$precio')";
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