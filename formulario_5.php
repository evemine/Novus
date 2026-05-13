<?php
 $conexion=mysqli_connect('localhost','root','','Novus');
include("formulario_5_registrar.php");

 ?>
 
   <form method="post" >


 <div class="formulario-5" >


    <h2> FORMULARIO GRUPOS </h2>

    <div class="input_wrapper">  
        <input type="text" name="id_taller" placeholder="ID_Taller" >
    </div> 

    <div class="input_wrapper">  
        <input type="text" name="nombre_taller" placeholder="Nombre del Taller" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="nombre_modulo" placeholder="Nombre del Módulo" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="id_modulo" placeholder="ID_Módulo" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="horario" placeholder="Horario" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="dia" placeholder="Día" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="nombre_empleado" placeholder="Nombre del Facilitador" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="aula" placeholder="Aula" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="numero_alumnos" placeholder="Número de Alumnos" >
    </div>

    <input class="btn" type="submit" name="register" value="Enviar">

 </div>

 </form> 


 </body>
 </html>