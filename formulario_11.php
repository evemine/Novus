<?php
 $conexion=mysqli_connect('localhost','root','','Novus');
include("formulario_11_registrar.php");


 ?>
 
 
  <form method="post" >


 <div class="formulario-6" >


    <h2> FORMULARIO SERVICIOS </h2>

    <div class="input_wrapper">  
        <input type="text" name="tipo_servicio" placeholder="Tipo de Servicio" >
    </div> 

    <div class="input_wrapper">  
        <input type="text" name="descripción" placeholder="Descripción" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="modalidad" placeholder="Modalidad" >
    </div>

    <div class="input_wrapper">  
        <input type="number" name="precio" placeholder="Precio" >
    </div>

    <input class="btn" type="submit" name="register" value="Enviar">

 </div>

 </form> 


 </body>
 </html>