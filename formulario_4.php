<?php
 $conexion=mysqli_connect('localhost','root','','Novus');
include("formulario_4_registrar.php");

 ?>
 
   <form method="post" >


 <div class="formulario-4" >


    <h2> FORMULARIO EMPLEADOS </h2>

    <div class="input_wrapper">  
        <input type="text" name="nombre" placeholder="Nombre(s)" >
    </div> 

    <div class="input_wrapper">  
        <input type="text" name="apellido" placeholder="Apellidos" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="apodo" placeholder="Apodo" >
    </div>

    <div class="input_wrapper">  
        <input type="tel" name="telefono" placeholder="Num. de Teléfono" >
    </div>

    <div class="input_wrapper">  
        <input type="email" name="email" placeholder="E-mail" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="genero" placeholder="Género" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="rol_trabajador" placeholder="Rol del Trabajador" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="fecha_contratacion" placeholder="Fecha de Contratación" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" >
    </div>

    <input class="btn" type="submit" name="register" value="Enviar">

 </div>

 </form> 


 </body>
 </html>