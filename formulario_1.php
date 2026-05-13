<?php
  $conexion=mysqli_connect('localhost','root','','Novus');
include("formulario_1_registrar.php");
 ?>
 
  <form method="post" >

 <div class="formulario-1" >


    <h2> FORMULARIO ASISTENCIA </h2>

    <div class="input_wrapper">  
        <input type="text" name="id_cliente" placeholder="ID_cliente" >
    </div>

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
        <input type="text" name="tipo_servicio" placeholder="Tipo de Servicio" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="asistencia" placeholder="Asistió" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="repuso" placeholder="Repuso" >
    </div>

    <div class="input_wrapper">  
        <input type="date" name="fecha" placeholder="Fecha" >
    </div>

    <input class="btn" type="submit" name="register" value="Enviar">

 </div>

 </form> 


 </body>
 </html>