<?php
 $conexion=mysqli_connect('localhost','root','','Novus');
 
 
  // Formulario 9 Módulos//


 if (isset($_POST['register'])) {
    if(
        strlen($_POST['nombre_módulo']) >= 1 &&
        strlen($_POST['id_taller']) >= 1 &&
        strlen($_POST['nombre_taller']) >= 1 &&
        strlen($_POST['requisitos']) >= 1
      ) {
           $nombre_módulo = trim($_POST['nombre_módulo']);
           $id_taller = trim($_POST['id_taller']);
           $nombre_taller = trim($_POST['nombre_taller']);
           $requisitos = trim($_POST['requisitos']);
           $consulta = "INSERT INTO módulos (`Nombre_módulo`, `ID_taller`, `Nombre_taller`, `Requisitos`)
            VALUES('$nombre_módulo', '$id_taller', '$nombre_taller', '$requisitos')";
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