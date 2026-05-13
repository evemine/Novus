<?php
 $conexion=mysqli_connect('localhost','root','','Novus');
 
 
  // Formulario 10 Pagos//


 if (isset($_POST['register'])) {
    if(
        strlen($_POST['id_cliente']) >= 1 &&
        strlen($_POST['apodo_cliente']) >= 1 &&
        strlen($_POST['tipo_servicio']) >= 1 &&
        strlen($_POST['monto_pagado']) >= 1 &&
        strlen($_POST['método_pago']) >= 1 &&
        strlen($_POST['fecha_pago']) >= 1 &&
        strlen($_POST['notas']) >= 1
      ) {
           $id_cliente = trim($_POST['id_cliente']);
           $apodo_cliente = trim($_POST['apodo_cliente']);
           $tipo_servicio = trim($_POST['tipo_servicio']);
           $monto_pagado = trim($_POST['monto_pagado']);
           $método_pago = trim($_POST['método_pago']);
           $fecha_pago = trim($_POST['fecha_pago']);
           $notas = trim($_POST['notas']);
           $consulta = "INSERT INTO pagos (`ID_cliente`, `Apodo_cliente`, `Tipo_servicio`, `Monto_pagado`, `Método_pago`, `Fecha_pago`, `Notas`)
            VALUES('$id_cliente', '$apodo_cliente', '$tipo_servicio', '$monto_pagado', '$método_pago', '$fecha_pago', '$notas')";
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