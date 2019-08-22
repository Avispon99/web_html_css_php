<html>

<body background ="../imagenes/Lila.jpg">

<center>
<b>

<br><br>
<font size = 3>VALOR CREDITOS MAS INSCRIPCION Y SEGURO</font>
<br><br>

<?php

$programa = $_POST["desplegar"] ;
$creditos = $_POST["nomtexto"] ;

switch($programa){

case 1:    // Gestion de Tecnologia de Información
 if($creditos <= 48 ){

       $respuesta = $creditos * 111300;
       $agregados = 103000 + 8500;
       $costo = $agregados + $respuesta;
       echo "$" . $costo;
   
     }
 else{ echo "<font color='#ff0000'>El programa academico seleccionado tiene maximo 48 creditos.</font>"; }

break;


case 2:    // Proceso de Alimentos y Biomateriales 
 if($creditos <= 25 ){

       $respuesta = $creditos * 101000;
       $agregados = 103000 + 8500;
       $costo = $agregados + $respuesta;
       echo "$" . $costo;
  
   
     }
 else{ echo "<font color='#ff0000'>El programa academico seleccionado tiene maximo 25 creditos.</font>"; }

break;


case 3:    //Seguridad Informatica
 if($creditos <=  25 ){

       $respuesta = $creditos * 99000;
       $agregados = 103000 + 8500;
       $costo = $agregados + $respuesta;
       echo "$" . $costo;
   
     }
 else{ echo "<font color='#ff0000'>El programa academico seleccionado tiene maximo 25 creditos.</font>"; }

break;


case 4:      //Ingenieria de Alimentos 
 if($creditos <=  160 ){

       $respuesta = $creditos * 83000;
       $agregados = 103000 + 8500;
       $costo = $agregados + $respuesta;
       echo "$" . $costo;
   
     }
 else{ echo "<font color='#ff0000'>El programa academico seleccionado tiene maximo 160 creditos.</font>"; }

break;


case 5:      //Ingenieria Industrial 
 if($creditos <= 160 ){

       $respuesta = $creditos * 83000;
       $agregados = 103000 + 8500;
       $costo = $agregados + $respuesta;
       echo "$" . $costo;
   
     }
 else{ echo "<font color='#ff0000'>El programa academico seleccionado tiene maximo 160 creditos.</font>"; }

break;


case 6:     //Ingenieria de Sistemas 
 if($creditos <= 167 ){

       $respuesta = $creditos * 83000;
       $agregados = 103000 + 8500;
       $costo = $agregados + $respuesta;
       echo "$" . $costo;
   
     }
 else{ echo "<font color='#ff0000'>El programa academico seleccionado tiene maximo 167 creditos.</font>"; }

break;


case 7:      //Ingenieria de Telecomunicaciones 
 if($creditos <= 158 ){

       $respuesta = $creditos * 83000;
       $agregados = 103000 + 8500;
       $costo = $agregados + $respuesta;
       echo "$" . $costo;
   
     }
 else{ echo "<font color='#ff0000'>El programa academico seleccionado tiene maximo 158 creditos.</font>"; }

break;


case 8:       //Ingenieria Electronica
 if($creditos <= 170 ){

       $respuesta = $creditos * 83000;
       $agregados = 103000 + 8500;
       $costo = $agregados + $respuesta;
       echo "$" . $costo;
   
     }
 else{ echo "<font color='#ff0000'>El programa academico seleccionado tiene maximo 170 creditos.</font>"; }

break;


case 9:      //Tecnologia de Alimentos 
 if($creditos <= 100 ){

       $respuesta = $creditos * 83000;
       $agregados = 103000 + 8500;
       $costo = $agregados + $respuesta;
       echo "$" . $costo;
   
     }
 else{ echo "<font color='#ff0000'>El programa academico seleccionado tiene maximo 100 creditos.</font>"; }

break;


case 10:     //Tecnologia de Producción de Audio
 if($creditos <=  85 ){

       $respuesta = $creditos * 83000;
       $agregados = 103000 + 8500;
       $costo = $agregados + $respuesta;
       echo "$" . $costo;
   
     }
 else{ echo "<font color='#ff0000'>El programa academico seleccionado tiene maximo 85 creditos.</font>"; }

break;


case 11:      // Tecnologia de Automatización 
 if($creditos <= 100 ){

       $respuesta = $creditos * 83000;
       $agregados = 103000 + 8500;
       $costo = $agregados + $respuesta;
       echo "$" . $costo;
   
     }
 else{ echo "<font color='#ff0000'>El programa academico seleccionado tiene maximo 100 creditos.</font>"; }

break;


case 12:     //Tecnologia de Desarrolllo de Software
 if($creditos <= 94 ){

       $respuesta = $creditos * 83000;
       $agregados = 103000 + 8500;
       $costo = $agregados + $respuesta;
       echo "$" . $costo;
   
     }
 else{ echo "<font color='#ff0000'>El programa academico seleccionado tiene maximo 94 creditos.</font>"; }

break;


case 13:   //Tecnologia Gestion de Redes y T
 if($creditos <= 85 ){

       $respuesta = $creditos * 83000;
       $agregados = 103000 + 8500;
       $costo = $agregados + $respuesta;
       echo "$" . $costo;
   
     }
 else{ echo "<font color='#ff0000'>El programa academico seleccionado tiene maximo 85 creditos.</font>"; }

break;


case 14:     //Tecnologia en Logistica Industrial 
 if($creditos <= 100 ){

       $respuesta = $creditos * 83000;
       $agregados = 103000 + 8500;
       $costo = $agregados + $respuesta;
       echo "$" . $costo;
   
     }
 else{ echo "<font color='#ff0000'>El programa academico seleccionado tiene maximo 100 creditos.</font>"; }

break;


case 15:     //Tecnologia en Comunicaciones Inalambricas  
 if($creditos <= 94 ){

       $respuesta = $creditos * 83000;
       $agregados = 103000 + 8500;
       $costo = $agregados + $respuesta;
       echo "$" . $costo;
   
     }
 else{ echo "<font color='#ff0000'>El programa academico seleccionado tiene maximo 94 creditos.</font>"; }

break;



}


?>

</b>
<br><br>
<form action="../Formulario Creditos.html">
<input type="submit" value="Regresar &gt;&gt;" />
</form>
</center>
</body>

</html>



