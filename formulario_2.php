<?php
 $conexion=mysqli_connect('localhost','root','','Novus');
include("formulario_2_registrar.php");

 ?>
 
 
  <form method="post" >


 <div class="formulario-2" >


    <h2> FORMULARIO CLIENTES </h2>

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

    <input class="btn" type="submit" name="register" value="Enviar">

 </div>

 </form> 


 </body>
 </html>