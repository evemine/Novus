<?php
 $conexion=mysqli_connect('localhost','root','','Novus');
 

 //Formulario 3 Descuentos//

 if (isset($_POST['register'])) {
    if(
        strlen($_POST['nombre_descuento']) >= 1 &&
        strlen($_POST['id_cliente']) >= 1 &&
        strlen($_POST['apodo']) >= 1 &&
        strlen($_POST['beneficiario']) >= 1 &&
        strlen($_POST['tipo_servicio']) >= 1 &&
        strlen($_POST['cantidad']) >= 1
      ) {
           $nombre_descuento = trim($_POST['nombre_descuento']);
           $id_cliente = trim($_POST['id_cliente']);
           $apodo = trim($_POST['apodo']);
           $beneficiario = trim($_POST['beneficiario']);
           $tipo_servicio = trim($_POST['tipo_servicio']); 
           $cantidad = trim($_POST['cantidad']); 
           $consulta = "INSERT INTO descuentos (`Nombre_descuento`,`ID_cliente`, `Apodo`, `Beneficiario`, `Servicio`, `Cantidad`)
            VALUES('$nombre_descuento', '$id_cliente', '$apodo', '$beneficiario', '$tipo_servicio', '$cantidad')";
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