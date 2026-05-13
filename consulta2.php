<?php
 $conexion=mysqli_connect('localhost','root','','novus');
?>
 
 <div class="formulario-6-consulta">
    <h2> CONSULTA 2: PAGOS POR MÉTODO DE PAGO </h2>
    
    <table class="tabla-consulta">
        <thead>
            <tr>
                <th>Método de Pago</th>
                <th>Cantidad de Pagos</th>
                <th>Monto Total</th>
                <th>Promedio por Pago</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $consulta = "SELECT Método_pago, COUNT(*) as Cantidad, SUM(Monto_pagado) as Total, AVG(Monto_pagado) as Promedio 
                         FROM pagos 
                         GROUP BY Método_pago 
                         ORDER BY Total DESC";
            $resultado = mysqli_query($conexion, $consulta);
            
            if(mysqli_num_rows($resultado) > 0) {
                while($fila = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $fila['Método_pago'] . "</td>";
                    echo "<td>" . $fila['Cantidad'] . "</td>";
                    echo "<td>$" . number_format($fila['Total'], 2) . "</td>";
                    echo "<td>$" . number_format($fila['Promedio'], 2) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4' style='text-align: center;'>No hay registros de pagos</td></tr>";
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