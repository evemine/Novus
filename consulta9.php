<?php
 $conexion=mysqli_connect('localhost','root','','novus');
?>
 
<div class="formulario-6-consulta">
    <h2> CONSULTA 9: INSCRIPCIONES A MENORES POR TIPO DE SERVICIO </h2>
    
    <table class="tabla-consulta">
        <thead>
            <tr>
                <th>Tipo de Servicio</th>
                <th>Cantidad de Inscripciones</th>
                <th>Lista de Menores</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $consulta = "SELECT Tipo_servicio, 
                         COUNT(*) as Cantidad,
                         GROUP_CONCAT(CONCAT(Nombre_menor, ' ', Apellidos_menor) SEPARATOR ', ') as Menores
                         FROM inscripción_menores 
                         WHERE Tipo_servicio IS NOT NULL AND Tipo_servicio != ''
                         GROUP BY Tipo_servicio
                         ORDER BY Cantidad DESC";
            $resultado = mysqli_query($conexion, $consulta);
            
            if(mysqli_num_rows($resultado) > 0) {
                while($fila = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $fila['Tipo_servicio'] . "</td>";
                    echo "<td>" . $fila['Cantidad'] . "</td>";
                    $menores = strlen($fila['Menores']) > 80 ? substr($fila['Menores'], 0, 80) . '...' : $fila['Menores'];
                    echo "<td>" . $menores . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3' style='text-align: center;'>No hay inscripciones registradas</td></tr>";
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