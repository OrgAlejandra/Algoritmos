<form id="form1" name="form1" method="post" action="">
    <center>
    <h5> ejercicio 4 </h5>
      <p>
          <label><h2>Ingrese el numero</h2></label>
        <input type="text" name="numero" id="numero" />
        
      </p>
      <p>
        <input type="submit" name="enviar" id="enviar" value="Enviar" />
        
        
      </p>
      <p>
        <label for="resultado">
<?php
if (!empty($_POST["numero"])) {
    $numero = "";
	 $numero = $_POST["numero"];
         $numerostring=(string)$numero;
         $result="";
         for ($i = strlen($numero); $i >=0; $i--) {
             $result .= $numerostring[$i];
         }
            echo"<h1><center> El valor al reves es:</h1><h2><center>$result</center></h2></center><br/>";
                  
    
         }
 
?>

