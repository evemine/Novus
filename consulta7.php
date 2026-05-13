<?php
 $conexion=mysqli_connect('localhost','root','','novus');
?>
 
<div class="formulario-6-consulta">
    <h2> CONSULTA 7: TALLERES - DESCRIPCIÓN Y DIRIGIDO A </h2>
    
    <table class="tabla-consulta">
        <thead>
            <tr>
                <th>ID Taller</th>
                <th>Nombre del Taller</th>
                <th>Descripción</th>
                <th>Dirigido a</th>
                <th>Módulos</th>
                <th>Sesiones</th>
                <th>Precio</th>
                <th>Duración (horas)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $consulta = "SELECT ID_taller, Nombre_taller, Descripción, Dirigido_a, Módulos, Num_sesiones, Precio, Duración_hora
                         FROM talleres 
                         ORDER BY Nombre_taller";
            $resultado = mysqli_query($conexion, $consulta);
            
            if(mysqli_num_rows($resultado) > 0) {
                while($fila = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $fila['ID_taller'] . "</td>";
                    echo "<td>" . $fila['Nombre_taller'] . "</td>";
                    echo "<td>" . $fila['Descripción'] . "</td>";
                    echo "<td>" . $fila['Dirigido_a'] . "</td>";
                    echo "<td>" . $fila['Módulos'] . "</td>";
                    echo "<td>" . $fila['Num_sesiones'] . "</td>";
                    echo "<td>$" . number_format($fila['Precio'], 2) . "</td>";
                    echo "<td>" . $fila['Duración_hora'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8' style='text-align: center;'>No hay talleres registrados</td></tr>";
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