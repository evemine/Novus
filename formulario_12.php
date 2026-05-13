<?php
 $conexion=mysqli_connect('localhost','root','','Novus');
include("formulario_12_registrar.php");

 ?>
 
 
  <form method="post" >


 <div class="formulario-6" >


    <h2> FORMULARIO TALLERES </h2>

    <div class="input_wrapper">  
        <input type="text" name="nombre_taller" placeholder="Nombre del Taller" >
    </div> 

    <div class="input_wrapper">  
        <input type="text" name="descripción" placeholder="Descripción" >
    </div>

    <div class="input_wrapper">  
        <input type="number" name="módulos" placeholder="Número de Módulos" >
    </div>

    <div class="input_wrapper">  
        <input type="number" name="num_sesiones" placeholder="Número de Sesiones" >
    </div>

    <div class="input_wrapper">  
        <input type="number" name="precio" placeholder="Precio" >
    </div>

    <div class="input_wrapper">  
        <input type="number" name="duración_hora" placeholder="Duración (horas)" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="dirigido_a" placeholder="Dirigido a" >
    </div>

    <input class="btn" type="submit" name="register" value="Enviar">

 </div>

 </form> 


 </body>
 </html>