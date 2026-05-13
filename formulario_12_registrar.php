<?php
 $conexion=mysqli_connect('localhost','root','','Novus');
 
 
  // Formulario 12 Talleres//


 if (isset($_POST['register'])) {
    if(
        strlen($_POST['nombre_taller']) >= 1 &&
        strlen($_POST['descripción']) >= 1 &&
        strlen($_POST['módulos']) >= 1 &&
        strlen($_POST['num_sesiones']) >= 1 &&
        strlen($_POST['precio']) >= 1 &&
        strlen($_POST['duración_hora']) >= 1 &&
        strlen($_POST['dirigido_a']) >= 1
      ) {
           $nombre_taller = trim($_POST['nombre_taller']);
           $descripción = trim($_POST['descripción']);
           $módulos = trim($_POST['módulos']);
           $num_sesiones = trim($_POST['num_sesiones']);
           $precio = trim($_POST['precio']);
           $duración_hora = trim($_POST['duración_hora']);
           $dirigido_a = trim($_POST['dirigido_a']);
           $consulta = "INSERT INTO talleres (`Nombre_taller`, `Descripción`, `Módulos`, `Num_sesiones`, `Precio`, `Duración_hora`, `Dirigido_a`)
            VALUES('$nombre_taller', '$descripción', '$módulos', '$num_sesiones', '$precio', '$duración_hora', '$dirigido_a')";
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