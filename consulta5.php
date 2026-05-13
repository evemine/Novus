<?php
 $conexion=mysqli_connect('localhost','root','','novus');
?>
 
 <div class="formulario-6-consulta">
    <h2> CONSULTA 5: CLIENTES CON DESCUENTOS </h2>
    
    <table class="tabla-consulta">
        <thead>
            <tr>
                <th>ID Descuento</th>
                <th>Nombre Descuento</th>
                <th>ID Cliente</th>
                <th>Apodo</th>
                <th>Beneficiario</th>
                <th>Servicio</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $consulta = "SELECT ID_descuento, Nombre_descuento, ID_cliente, Apodo, Beneficiario, Servicio, Cantidad 
                         FROM descuentos 
                         ORDER BY ID_cliente";
            $resultado = mysqli_query($conexion, $consulta);
            
            if(mysqli_num_rows($resultado) > 0) {
                while($fila = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $fila['ID_descuento'] . "</td>";
                    echo "<td>" . $fila['Nombre_descuento'] . "</td>";
                    echo "<td>" . $fila['ID_cliente'] . "</td>";
                    echo "<td>" . $fila['Apodo'] . "</td>";
                    echo "<td>" . $fila['Beneficiario'] . "</td>";
                    echo "<td>" . $fila['Servicio'] . "</td>";
                    echo "<td>" . $fila['Cantidad'] . "$" . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7' style='text-align: center;'>No hay registros de descuentos</td></tr>";
            }
            ?>
        </tbody>
    </table>
 </div>
 
 <style>
    .tabla-consulta {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    
    .tabla-consulta th,
    .tabla-consulta td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }
    
    .tabla-consulta th {
        background-color: #1a1a2e;
        color: white;
    }
    
    .tabla-consulta tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    
    .tabla-consulta tr:hover {
        background-color: #ddd;
    }
 </style>