<?php
 $conexion=mysqli_connect('localhost','root','','Novus');
 

 // Formulario 2 Clientes//


 if (isset($_POST['register'])) {
    if(
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellido']) >= 1 &&
        strlen($_POST['apodo']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['genero']) >= 1
      ) {
           $nombre = trim($_POST['nombre']);
           $apellido = trim($_POST['apellido']);
           $apodo = trim($_POST['apodo']);
           $telefono = trim($_POST['telefono']); 
           $email = trim($_POST['email']); 
           $genero = trim($_POST['genero']);
           $fecha = date("d/m/y");
           $consulta = "INSERT INTO clientes (`Nombre(s)`, `Apellidos`, `Apodo`, `Núm. de Teléfono`, `E-mail`, `Género`)
            VALUES('$nombre', '$apellido', '$apodo', '$telefono','$email', '$genero')";
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