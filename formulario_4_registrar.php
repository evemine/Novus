<?php
 $conexion=mysqli_connect('localhost','root','','Novus');
 

 // Formulario 4 Empleados//


 if (isset($_POST['register'])) {
    if(
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellido']) >= 1 &&
        strlen($_POST['apodo']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['genero']) >= 1 &&
        strlen($_POST['rol_trabajador']) >= 1 &&
        strlen($_POST['fecha_contratacion']) >= 1 &&
        strlen($_POST['fecha_nacimiento']) >= 1
      ) {
           $nombre = trim($_POST['nombre']);
           $apellido = trim($_POST['apellido']);
           $apodo = trim($_POST['apodo']);
           $telefono = trim($_POST['telefono']); 
           $email = trim($_POST['email']); 
           $genero = trim($_POST['genero']);
           $rol_trabajador = trim($_POST['rol_trabajador']);
           $fecha_contratacion = trim($_POST['fecha_contratacion']);
           $fecha_nacimiento = trim($_POST['fecha_nacimiento']);
           $consulta = "INSERT INTO empleados (`Nombre(s)`, `Apellidos`, `Apodo`, `Núm. de Teléfono`, `E-mail`, `Género`, `Rol_trabajador`, `Fecha_contratación`, `Fecha_nacimiento`)
            VALUES('$nombre', '$apellido', '$apodo', '$telefono','$email', '$genero', '$rol_trabajador', '$fecha_contratacion', '$fecha_nacimiento')";
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