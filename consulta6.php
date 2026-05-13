<?php
 $conexion=mysqli_connect('localhost','root','','Novus');
?>
 
 <div class="formulario-6-consulta">
    <h2> CONSULTA 6: CLIENTES FRECUENTES </h2>
    
    <table class="tabla-consulta">
        <thead>
            <tr>
                <th>ID Cliente</th>
                <th>Apodo</th>
                <th>Cantidad de Pagos</th>
                <th>Total Gastado</th>
             </tr>
        </thead>
        <tbody>
            <?php
            $consulta = "SELECT ID_cliente, Apodo_cliente, COUNT(*) as Cantidad_pagos, SUM(Monto_pagado) as Total_gastado FROM pagos GROUP BY ID_cliente, Apodo_cliente ORDER BY Total_gastado DESC LIMIT 10";
            $resultado = mysqli_query($conexion, $consulta);
            
            while($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . $fila['ID_cliente'] . "</td>";
                echo "<td>" . $fila['Apodo_cliente'] . "</td>";
                echo "<td>" . $fila['Cantidad_pagos'] . "</td>";
                echo "<td>$" . number_format($fila['Total_gastado'], 2) . "</td>";
                echo "</tr>";
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