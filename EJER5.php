<form id="form1" name="form1" method="post" action="">
    <center>
        
        <br/>
        <h5> ejercicio 5 </h5>
        
        <p><h2>Estudiante 1:</h2></p>
    
        <label><h1>Edad:</h1></label>
    
        <input type="text" name="edad1" id="edad1" />
        <label><h1>Altura :</h1></label>
        <input type="text" name="altura1" id="altura1" />
        <p><h1>Estudiante 2:</h1></p>
        <label><h1>Edad:</h1></label>
        <input type="text" name="edad2" id="edad2" />
        <label><h1> Altura :</h1></label>
        <input type="text" name="altura2" id="altura2" />
        <p><h2>Estudiante 3:</h2></p>
        <label><h1>Edad:</h1></label>
        <input type="text" name="edad3" id="edad3" />
        <label><h1>Altura :</h1></label>
        <input type="text" name="altura3" id="altura3" />
        <p><h2>Estudiante 4:</h2></p>
        <label><h1>Edad:</h1></label>
        <input type="text" name="edad4" id="edad4" />
        <label><h1>Altura :</h1></label>
        <input type="text" name="altura4" id="altura4" />
        <p><h2>Estudiante 5:</h2></p>
        <label><h1>Edad:</h1></label>
        <input type="text" name="edad5" id="edad5" />
        <label><h1>Ingrese la altura :</h1></label>
        <input type="text" name="altura5" id="altura5" />
        </p>
      <p>
        <input type="submit" name="enviar" id="enviar" value="Enviar" />
      </p>
        
      </p>
      <label for="resultado">
<?php

	 if (!empty($_POST["edad1"]) and($_POST["edad2"]) and($_POST["edad3"])and($_POST["edad4"])and($_POST["edad5"])and($_POST["altura1"]) and($_POST["altura2"])and($_POST["altura3"])and($_POST["altura4"])and($_POST["altura5"])) {
	  $EdadE1 = $_POST ["edad1"];
	  $EdadE2 = $_POST ["edad2"];
	  $EdadE3 = $_POST ["edad3"];
	  $EdadE4 = $_POST ["edad4"];
	  $EdadE5 = $_POST ["edad5"];
	  $AlturaE1 = $_POST ["altura1"];
	  $AlturaE2 = $_POST ["altura2"];
	  $AlturaE3 = $_POST ["altura3"];
	  $AlturaE4 = $_POST ["altura4"];
	  $AlturaE5 = $_POST ["altura5"];
	  $TempE = 0;
	  $TempA = 0;
	 if ($EdadE1 > 18 ){
		  $TempE = $TempE + 1;
		  } 	
		  if ($EdadE2 > 18 ){
		 $TempA = $TempA + 1;
		  } 
		   if ($EdadE3 > 18 ){
		  $TempE = $TempE + 1;
		   }
		   if ($EdadE4 > 18 ){
		  $TempE = $TempE + 1;
		   }
		   if ($EdadE5 > 18 ){
		  $TempE = $TempE + 1;
		  } 
		  			
		  if ($AlturaE1 > 1.75 ){
		 $TempA = $TempA + 1;
		  } 
		  if ($AlturaE2 > 1.75 ){
		  $TempA = $TempA + 1;
		  } 
		  if ($AlturaE3 > 1.75 ){
		  $TempA = $TempA + 1;
		  } 
		  if ($AlturaE4 > 1.75 ){
		  $TempA = $TempA + 1;
		  }  
		  if ($AlturaE5 > 1.75 ){
		  $TempA = $TempA + 1;
		  } 
	
?>
</p>
      <p> hay <?php echo $TempE; ?>  estudiantes mayores de 18 años </p>
       <p>Hay <?php echo $TempA; ?> estudiantes que miden más de 1.75 </p>
       <?php } ?>