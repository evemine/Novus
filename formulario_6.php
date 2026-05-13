<?php
 $conexion=mysqli_connect('localhost','root','','Novus');
include("formulario_6_registrar.php");


 ?>
 
 
  <form method="post" >


 <div class="formulario-6" >


    <h2> FORMULARIO INSCRIPCIÓN DE MENORES </h2>

    <div class="input_wrapper">  
        <input type="text" name="nombre_menor" placeholder="Nombre del Menor" >
    </div> 

    <div class="input_wrapper">  
        <input type="text" name="apellidos_menor" placeholder="Apellidos del Menor" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="apodo_menor" placeholder="Apodo del Menor" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="edad" placeholder="Edad" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="nombre_guardián" placeholder="Nombre del Guardián" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="apellidos_guardián" placeholder="Apellidos del Guardián" >
    </div>

    <div class="input_wrapper">  
        <input type="tel" name="contacto_guardián" placeholder="Contacto del Guardián" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="tipo_servicio" placeholder="Tipo de Servicio" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="descuento" placeholder="Descuento" >
    </div>

    <div class="input_wrapper">  
        <input type="text" name="notas" placeholder="Notas" >
    </div>

    <input class="btn" type="submit" name="register" value="Enviar">

 </div>

 </form> 


 </body>
 </html>