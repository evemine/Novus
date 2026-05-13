<?php
 $conexion=mysqli_connect('localhost','root','','Novus');
include("formulario_10_registrar.php");

 ?>
 
 
  <form method="post" >


 <div class="formulario-6" >


    <h2> FORMULARIO PAGOS </h2>

    <div class="input_wrapper">  
        <input type="text" name="id_cliente" placeholder="ID del Cliente" >
    </div> 

    <div class="input_wrapper">  
        <input type="text" name="apodo_cliente" placeholder="Apodo del Cliente" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="tipo_servicio" placeholder="Tipo de Servicio" >
    </div>

    <div class="input_wrapper">  
        <input type="number" name="monto_pagado" placeholder="Monto Pagado" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="método_pago" placeholder="Método de Pago" >
    </div>

    <div class="input_wrapper">  
        <input type="datetime-local" name="fecha_pago" placeholder="Fecha de Pago" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="notas" placeholder="Notas" >
    </div>

    <input class="btn" type="submit" name="register" value="Enviar">

 </div>

 </form> 


 </body>
 </html>