<?php
 $conexion=mysqli_connect('localhost','root','','novus');
?>
 
 <div class="formulario-6-consulta">
    <h2> CONSULTA 4: FACILITADORES POR TALLER </h2>
    
    <table class="tabla-consulta">
        <thead>
            <tr>
                <th>ID Taller</th>
                <th>Nombre del Taller</th>
                <th>ID Empleado</th>
                <th>Nombre Facilitador</th>
                <th>Apellidos</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $consulta = "SELECT at.ID_taller, at.Nombre_taller, at.ID_empleado, at.Nombre_facilitador,
                         e.Apellidos, e.`Núm. de Teléfono` as Telefono, e.`E-mail` as Email, e.Rol_trabajador
                         FROM asignaciones_talleres at
                         INNER JOIN empleados e ON at.ID_empleado = e.ID_empleado
                         ORDER BY at.Nombre_taller, e.`Nombre(s)`";
            $resultado = mysqli_query($conexion, $consulta);
            
            if(mysqli_num_rows($resultado) > 0) {
                while($fila = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $fila['ID_taller'] . "</td>";
                    echo "<td>" . $fila['Nombre_taller'] . "</td>";
                    echo "<td>" . $fila['ID_empleado'] . "</td>";
                    echo "<td>" . $fila['Nombre_facilitador'] . "</td>";
                    echo "<td>" . ($fila['Apellidos'] ?? '---') . "</td>";
                    echo "<td>" . ($fila['Telefono'] ?? '---') . "</td>";
                    echo "<td>" . ($fila['Email'] ?? '---') . "</td>";
                    echo "<td>" . ($fila['Rol_trabajador'] ?? '---') . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8' style='text-align: center;'>No hay asignaciones de facilitadores</td><tr>";
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