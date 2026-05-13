<?php
 $conexion=mysqli_connect('localhost','root','','Novus');
include("formulario_9_registrar.php");

 ?>
 
 

  <form method="post" >


 <div class="formulario-6" >


    <h2> FORMULARIO MÓDULOS </h2>

    <div class="input_wrapper">  
        <input type="text" name="nombre_módulo" placeholder="Nombre del Módulo" >
    </div> 

    <div class="input_wrapper">  
        <input type="text" name="id_taller" placeholder="ID del Taller" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="nombre_taller" placeholder="Nombre del Taller" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="requisitos" placeholder="Requisitos" >
    </div>

    <input class="btn" type="submit" name="register" value="Enviar">

 </div>

 </form> 


 </body>
 </html>