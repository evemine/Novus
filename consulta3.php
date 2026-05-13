<?php
 $conexion=mysqli_connect('localhost','root','','novus');
?>
 
 <div class="formulario-6-consulta">
    <h2> CONSULTA 3: TALLERES CON MÁS INSCRIPCIONES </h2>
    
    <table class="tabla-consulta">
        <thead>
            <tr>
                <th>ID Taller</th>
                <th>Nombre del Taller</th>
                <th>Total Inscripciones</th>
                <th>Ingresos Estimados*</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $consulta = "SELECT it.ID_taller, it.Nombre_taller, COUNT(*) as Total_inscripciones, 
                         (COUNT(*) * t.Precio) as Ingresos_estimados
                         FROM inscripción_talleres it
                         INNER JOIN talleres t ON it.ID_taller = t.ID_taller
                         GROUP BY it.ID_taller, it.Nombre_taller, t.Precio
                         ORDER BY Total_inscripciones DESC
                         LIMIT 10";
            $resultado = mysqli_query($conexion, $consulta);
            
            if(mysqli_num_rows($resultado) > 0) {
                while($fila = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $fila['ID_taller'] . "</td>";
                    echo "<td>" . $fila['Nombre_taller'] . "</td>";
                    echo "<td>" . $fila['Total_inscripciones'] . "</td>";
                    echo "<td>$" . number_format($fila['Ingresos_estimados'], 2) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4' style='text-align: center;'>No hay registros de inscripciones a talleres</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <p style="font-size: 12px; margin-top: 10px; color: #666;">*Ingresos estimados = Precio del taller × Número de inscripciones</p>
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