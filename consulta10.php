<?php
 $conexion=mysqli_connect('localhost','root','','novus');
?>
 
<div class="formulario-6-consulta">
    <h2> CONSULTA 10: ASISTENCIAS POR TIPO DE SERVICIO </h2>
    
    <table class="tabla-consulta">
        <thead>
            <tr>
                <th>Tipo de Servicio</th>
                <th>Total Asistencias</th>
                <th>Total Reposiciones</th>
                <th>Tasa de Asistencia</th>
                <th>Clientes Distintos</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $consulta = "SELECT Tipo_servicio,
                         SUM(CASE WHEN Asistió = 'Si' OR Asistió = 'Sí' OR Asistió = '1' THEN 1 ELSE 0 END) as Total_asistencias,
                         SUM(CASE WHEN Repuso = 'Si' OR Repuso = 'Sí' OR Repuso = '1' THEN 1 ELSE 0 END) as Total_reposiciones,
                         COUNT(*) as Total_registros,
                         COUNT(DISTINCT ID_cliente) as Clientes_distintos
                         FROM asistencia 
                         WHERE Tipo_servicio IS NOT NULL AND Tipo_servicio != ''
                         GROUP BY Tipo_servicio
                         ORDER BY Total_asistencias DESC";
            $resultado = mysqli_query($conexion, $consulta);
            
            if(mysqli_num_rows($resultado) > 0) {
                while($fila = mysqli_fetch_assoc($resultado)) {
                    $tasa = ($fila['Total_registros'] > 0) ? ($fila['Total_asistencias'] / $fila['Total_registros']) * 100 : 0;
                    echo "<tr>";
                    echo "<td>" . $fila['Tipo_servicio'] . "</td>";
                    echo "<td>" . $fila['Total_asistencias'] . "</td>";
                    echo "<td>" . $fila['Total_reposiciones'] . "</td>";
                    echo "<td>" . round($tasa, 1) . "%" . "</td>";
                    echo "<td>" . $fila['Clientes_distintos'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5' style='text-align: center;'>No hay registros de asistencia</td></tr>";
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