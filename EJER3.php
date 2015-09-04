<form id="form1" name="form1" method="post" action="">
    <center>
    <h5> ejercicio 3 </h5>
      <p>
          <label><h2>Ingrese el valor del radio</h2></label>
        <input type="text" name="radio" id="radio" />
        <label for="opcion"><br />
          <br />
          escoja una opción: </label>
        <select name="opcion" id="opcion">
          <option value="1">circulo</option>
          <option value="2">circunferencia</option>
          
        </select>
      </p>
      <p>
        <input type="submit" name="enviar" id="enviar" value="Enviar" />
        
        
      </p>
      <p>
        <label for="resultado">
            
<?php
   if (!empty($_POST["opcion"])) {
	 $radio = $_POST["radio"];
        $Pi = 3.1416;
        $a = $Pi * $radio *  $radio;
         $l = 2 * $Pi * $radio; 
	 
	 $opc = $_POST["opcion"];
	 if ($opc == 1){
		echo"<h1><center>El área del circulo es:</h1><h2><center> $a</center></h2></center><br/>";
     }else {
	 	echo"<h1><center> La longitud de la circunferencia es:</h1><h2><center> $l</center></h2></center><br/>";	 
	 }
  }
  

?>
