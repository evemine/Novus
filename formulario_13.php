<?php
 $conexion=mysqli_connect('localhost','root','','Novus');
include("formulario_13_registrar.php");

 ?>
 
 
  <form method="post" >


 <div class="formulario-6" >


    <h2> FORMULARIO ASIGNACIONES DE TALLERES </h2>

    <div class="input_wrapper">  
        <input type="text" name="id_taller" placeholder="ID del Taller" >
    </div> 

    <div class="input_wrapper">  
        <input type="text" name="nombre_taller" placeholder="Nombre del Taller" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="id_empleado" placeholder="ID del Empleado" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="nombre_facilitador" placeholder="Nombre del Facilitador" >
    </div>

    <input class="btn" type="submit" name="register" value="Enviar">

 </div>

 </form> 


 </body>
 </html>