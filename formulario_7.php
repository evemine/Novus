<?php
 $conexion=mysqli_connect('localhost','root','','Novus');
include("formulario_7_registrar.php");

 ?>
 
 
  <form method="post" >


 <div class="formulario-6" >  


    <h2> FORMULARIO INSCRIPCIÓN DE SERVICIOS </h2>

    <div class="input_wrapper">  
        <input type="text" name="id_cliente" placeholder="ID_Cliente" >
    </div> 

    <div class="input_wrapper">  
        <input type="text" name="apodo_cliente" placeholder="Apodo del Cliente" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="id_servicio" placeholder="ID_Servicio" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="tipo_servicio" placeholder="Tipo de Servicio" >
    </div>

    <div class="input_wrapper">  
        <input type="datetime-local" name="fecha_inscripción" placeholder="Fecha de Inscripción" >
    </div>

    <input class="btn" type="submit" name="register" value="Enviar">

 </div>

 </form> 


 </body>
 </html>