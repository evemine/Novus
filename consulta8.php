<?php
 $conexion=mysqli_connect('localhost','root','','novus');
?>
 
<div class="formulario-6-consulta">
    <h2> CONSULTA 8: INGRESOS MENSUALES </h2>
    
    <table class="tabla-consulta">
        <thead>
            <tr>
                <th>Año</th>
                <th>Mes</th>
                <th>Cantidad de Pagos</th>
                <th>Ingreso Total</th>
                <th>Ingreso Promedio</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $consulta = "SELECT YEAR(Fecha_pago) as Año, 
                         MONTH(Fecha_pago) as Mes,
                         MONTHNAME(Fecha_pago) as Nombre_mes,
                         COUNT(*) as Cantidad_pagos, 
                         SUM(Monto_pagado) as Ingreso_total,
                         AVG(Monto_pagado) as Ingreso_promedio
                         FROM pagos 
                         GROUP BY YEAR(Fecha_pago), MONTH(Fecha_pago), MONTHNAME(Fecha_pago)
                         ORDER BY Año DESC, Mes DESC";
            $resultado = mysqli_query($conexion, $consulta);
            
            if(mysqli_num_rows($resultado) > 0) {
                while($fila = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $fila['Año'] . "</td>";
                    echo "<td>" . $fila['Nombre_mes'] . "</td>";
                    echo "<td>" . $fila['Cantidad_pagos'] . "</td>";
                    echo "<td>$" . number_format($fila['Ingreso_total'], 2) . "</td>";
                    echo "<td>$" . number_format($fila['Ingreso_promedio'], 2) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5' style='text-align: center;'>No hay datos de pagos registrados</td></tr>";
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
    .tabla-consulta th, .tabla-consulta td {
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