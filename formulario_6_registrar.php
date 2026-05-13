<?php
 $conexion=mysqli_connect('localhost','root','','Novus');
 

 // Formulario 6 Inscripcion de Menores//


 if (isset($_POST['register'])) {
    if(
        strlen($_POST['nombre_menor']) >= 1 &&
        strlen($_POST['apellidos_menor']) >= 1 &&
        strlen($_POST['apodo_menor']) >= 1 &&
        strlen($_POST['edad']) >= 1 &&
        strlen($_POST['nombre_guardián']) >= 1 &&
        strlen($_POST['apellidos_guardián']) >= 1 &&
        strlen($_POST['contacto_guardián']) >= 1 &&
        strlen($_POST['tipo_servicio']) >= 1 &&
        strlen($_POST['descuento']) >= 1 &&
        strlen($_POST['notas']) >= 1
      ) {
           $nombre_menor= trim($_POST['nombre_menor']);
           $apellidos_menor = trim($_POST['apellidos_menor']);
           $apodo_menor = trim($_POST['apodo_menor']);
           $edad = trim($_POST['edad']); 
           $nombre_guardián = trim($_POST['nombre_guardián']); 
           $apellidos_guardián = trim($_POST['apellidos_guardián']);
           $contacto_guardián = trim($_POST['contacto_guardián']);
           $tipo_servicio = trim($_POST['tipo_servicio']);
           $descuento = trim($_POST['descuento']);
           $notas = trim($_POST['notas']);
           $consulta = "INSERT INTO inscripción_menores (`Nombre_menor`, `Apellidos_menor`, `Apodo_menor`, `Edad`, `Nombre_guardián`, `Apellidos_guardián`, `Contacto_guardián`, `Tipo_servicio`, `Descuento`, `Notas`)
            VALUES('$nombre_menor', '$apellidos_menor', '$apodo_menor', '$edad','$nombre_guardián', '$apellidos_guardián', '$contacto_guardián', '$tipo_servicio', '$descuento', '$notas')";
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