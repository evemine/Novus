<?php
 $conexion=mysqli_connect('localhost','root','','novus');
?>
 
 <div class="formulario-6-consulta">
    <h2> CONSULTA 1: CLIENTES CON MÁS ASISTENCIAS </h2>
    
    <table class="tabla-consulta">
        <thead>
            <tr>
                <th>ID Cliente</th>
                <th>Nombre(s)</th>
                <th>Apellidos</th>
                <th>Apodo</th>
                <th>Total Asistencias</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $consulta = "SELECT a.ID_cliente, c.`Nombre(s)`, c.Apellidos, c.Apodo, COUNT(*) as Total_asistencias 
                         FROM asistencia a
                         INNER JOIN clientes c ON a.ID_cliente = c.ID_cliente
                         WHERE a.Asistió = 'Si' OR a.Asistió = 'Sí' OR a.Asistió = '1'
                         GROUP BY a.ID_cliente, c.`Nombre(s)`, c.Apellidos, c.Apodo
                         ORDER BY Total_asistencias DESC
                         LIMIT 10";
            $resultado = mysqli_query($conexion, $consulta);
            
            if(mysqli_num_rows($resultado) > 0) {
                while($fila = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $fila['ID_cliente'] . "</td>";
                    echo "<td>" . $fila['Nombre(s)'] . "</td>";
                    echo "<td>" . $fila['Apellidos'] . "</td>";
                    echo "<td>" . ($fila['Apodo'] ? $fila['Apodo'] : '---') . "</td>";
                    echo "<td>" . $fila['Total_asistencias'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5' style='text-align: center;'>No hay registros de asistencias</td></tr>";
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