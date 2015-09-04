 <h5> ejercicio6</h5>

<form id="form1" name="form1" method="post" action="">
    <label><h2>Ingrese el numero :</h2></label>
        <label for="numeros"></label>
        <input type="text" name="numeros" id="numeros" />
      </p>
      <p>
        <input type="submit" name="calcular" id="calcular" value="calcular" />
        
      </p>
      
          <?php
	
	 if (!empty($_POST["numeros"])) {
	  $numero = $_POST ["numeros"];
	  $numero2 = strrev ($numero);
     if ($numero == $numero2) {
	  echo "el numero $numero si es capicua";
	  } else {
	 echo "el numero $numero no es capicua";	 
	 }
 }
	?>
