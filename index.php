<?php
// Determinar qué página cargar (por defecto, dashboard)
$pagina = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOVUS - Centro de Desarrollo Humano</title>
    <link rel="stylesheet" href="/Novus/formularios/formato.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Neo Sans Std';
            background-color: #f5f5f5;
        }

        .layout {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 280px;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            color: white;
            position: fixed;
            height: 100vh;
            overflow-y: auto;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        }

        .logo {
            padding: 30px 20px;
            text-align: center;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            margin-bottom: 20px;
        }

        .logo h2 {
            font-size: 28px;
            margin-bottom: 5px;
            color: #1496ed;
        }

        .logo p {
            font-size: 12px;
            opacity: 0.7;
        }

        .menu h3 {
            padding: 15px 20px 5px 20px;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #1496ed;
            opacity: 0.8;
        }

        .menu ul {
            list-style: none;
            margin-bottom: 20px;
        }

        .menu ul li a {
            display: block;
            padding: 12px 20px;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 14px;
        }

        .menu ul li a:hover {
            background: rgba(255,255,255,0.1);
            padding-left: 30px;
        }


        .contenido {
            flex: 1;
            margin-left: 280px;
            padding: 20px;
        }

        .header {
             font-family: 'Neo Sans Std';
            background: linear-gradient(135deg, #00177e 0%, #060074 100%);
            color: rgb(255, 255, 255);
            padding: 25px;
            text-align: center;
            margin-bottom: 30px;
            border-radius: 8px;
            
        }

        .header h1 {
            color: #ffffff;
            font-size: 40px;
        }

        .header p {
            color: #afafaf;
            margin-top: 5px;
            font-size: 28px;
        }

        .contenedor-formulario {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            min-height: 500px;
        }

        .bienvenida {
            text-align: center;
            padding: 50px;
        }

        .bienvenida h2 {
            color: #1a1a2e;
            margin-bottom: 20px;
        }


        @media (max-width: 768px) {
            .sidebar {
                width: 80px;
            }
            
            .sidebar .logo h2,
            .sidebar .logo p,
            .menu h3,
            .menu ul li a {
                display: none;
            }
            
            .contenido {
                margin-left: 80px;
            }
        }


        .success {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 5px;
            margin-top: 15px;
            text-align: center;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border-radius: 5px;
            margin-top: 15px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="layout">
    <!-- Sidebar / Menú Lateral -->
    <aside class="sidebar">
        <div class="logo">
            <h2>NOVUS</h2>
            <p>Centro de Desarrollo Humano</p>
        </div>
        
        <nav class="menu">
            <h3> FORMULARIOS</h3>
            <ul>
                <li><a href="?page=1"> Asistencias</a></li>
                <li><a href="?page=2"> Clientes</a></li>
                <li><a href="?page=3"> Descuentos</a></li>
                <li><a href="?page=4"> Empleados</a></li>
                <li><a href="?page=5"> Grupos</a></li>
                <li><a href="?page=6"> Inscripción Menores</a></li>
                <li><a href="?page=7"> Inscripción Servicios</a></li>
                <li><a href="?page=8"> Inscripción Talleres</a></li>
                <li><a href="?page=9"> Módulos</a></li>
                <li><a href="?page=10"> Pagos</a></li>
                <li><a href="?page=11"> Servicios</a></li>
                <li><a href="?page=12"> Talleres</a></li>
                <li><a href="?page=13"> Asignaciones Talleres</a></li>
            </ul>
            
            <h3>CONSULTAS</h3>
            <ul>
                <li><a href="?page=consulta1"> Clientes con mas Asistencias</a></li>
                <li><a href="?page=consulta2"> Pagos por Método de Pago</a></li>
                <li><a href="?page=consulta3"> Talleres con mas Inscripciones</a></li>
                <li><a href="?page=consulta4"> Facilitadores por Taller</a></li>
                <li><a href="?page=consulta5"> Clientes con Descuentos</a></li>
                <li><a href="?page=consulta6"> Clientes Frecuentes</a></li>
                <li><a href="?page=consulta7"> Talleres </a></li>
                <li><a href="?page=consulta8"> Ingresos Mensuales</a></li>
                <li><a href="?page=consulta9"> Inscripciones de Menores</a></li>
                <li><a href="?page=consulta10"> Asistencias por tipo de Servicio</a></li>
            </ul>
        </nav>
    </aside>
    
    <!-- Contenido Principal -->
    <main class="contenido">
        <div class="header">
            <h1>Base de Datos de NOVUS</h1>
            <p>Centro de Desarrollo Humano</p>
        </div>
        
        <div class="contenedor-formulario">
            <?php
            // Cargar la página seleccionada
            switch($pagina) {
                case '1':
                    include('formularios/formulario_1.php');
                    break;
                case '2':
                    include('formularios/formulario_2.php');
                    break;
                case '3':
                    include('formularios/formulario_3.php');
                    break;
                case '4':
                    include('formularios/formulario_4.php');
                    break;
                case '5':
                    include('formularios/formulario_5.php');
                    break;
                case '6':
                    include('formularios/formulario_6.php');
                    break;
                case '7':
                    include('formularios/formulario_7.php');
                    break;
                case '8':
                    include('formularios/formulario_8.php');
                    break;
                case '9':
                    include('formularios/formulario_9.php');
                    break;
                case '10':
                    include('formularios/formulario_10.php');
                    break;
                case '11':
                    include('formularios/formulario_11.php');
                    break;
                case '12':
                    include('formularios/formulario_12.php');
                    break;
                case '13':
                    include('formularios/formulario_13.php');
                    break;
                case 'consulta1':
                    include('consultas/consulta1.php');
                    break;
                case 'consulta2':
                    include('consultas/consulta2.php');
                    break;
                case 'consulta3':
                    include('consultas/consulta3.php');
                    break;
                case 'consulta4':
                    include('consultas/consulta4.php');
                    break;
                case 'consulta5':
                    include('consultas/consulta5.php');
                    break;
                case 'consulta6':
                    include('consultas/consulta6.php');
                    break;
                case 'consulta7':
                    include('consultas/consulta7.php');
                    break;
                case 'consulta8':
                    include('consultas/consulta8.php');
                    break;
                case 'consulta9':
                    include('consultas/consulta9.php');
                    break;
                case 'consulta10':
                    include('consultas/consulta10.php');
                    break;
                default:
                    echo '<div class="bienvenida">';
                    echo '<h2> Dashboard</h2>';
                    echo '<p>Selecciona una opción del menú lateral para comenzar.</p>';
                    echo '<br><br>';
                    echo '<h3> Formularios y Consultas</h3>';
                    echo '</div>';
                    break;
            }
            ?>
        </div>
    </main>
</div>

</body>
</html>