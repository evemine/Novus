<?php
 $conexion=mysqli_connect('localhost','root','','Novus');
include("formulario_3_registrar.php");


 ?>
 
  <form method="post" >

 <div class="formulario-3" >


    <h2> FORMULARIO DESCUENTOS </h2>

    <div class="input_wrapper">  
        <input type="text" name="nombre_descuento" placeholder="Nombre del Descuento" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="id_cliente" placeholder="ID_cliente" >
    </div> 

    <div class="input_wrapper">  
        <input type="text" name="apodo" placeholder="Apodo" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="beneficiario" placeholder="Beneficiario" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="tipo_servicio" placeholder="Tipo de Servicio" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="cantidad" placeholder="Cantidad" >
    </div>

    <input class="btn" type="submit" name="register" value="Enviar">

 </div>

 </form> 


 </body>
 </html>