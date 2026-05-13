<?php
 $conexion=mysqli_connect('localhost','root','','Novus');
include("formulario_8_registrar.php");
 ?>
 
 
  <form method="post" >


 <div class="formulario-6" >


    <h2> FORMULARIO INSCRIPCIÓN DE TALLERES </h2>

    <div class="input_wrapper">  
        <input type="text" name="id_cliente" placeholder="ID_Cliente" >
    </div> 

    <div class="input_wrapper">  
        <input type="text" name="apodo_cliente" placeholder="Apodo del Cliente" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="id_taller" placeholder="ID_Taller" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="nombre_taller" placeholder="Nombre del Taller" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="id_módulo" placeholder="ID_Módulo" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="núm_módulo" placeholder="Número de Módulo" >
    </div>

    <div class="input_wrapper">  
        <input type="datetime-local" name="fecha_inscripción" placeholder="Fecha de Inscripción" >
    </div>

    <input class="btn" type="submit" name="register" value="Enviar">

 </div>

 </form> 


 </body>
 </html>