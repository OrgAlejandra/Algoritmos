<form id="form1" name="form1" method="post" action="">
    <center>
        
        <br/>
        <h5> ejercicio 7 </h5>
        <label><h2>Ingrese total de kilometros que recorre su automovil:</h2></label>
        <input type="text" name="kilometros" id="kilometros" />
        </p>
      <p>
        <input type="submit" name="enviar" id="enviar" value="Enviar" />
      </p>
        
      </p>
      <label for="resultado">
      
        <?php
        if (!empty($_POST["kilometros"])) {
       $k= $_POST["kilometros"];
     $li=1/16.4;
     $r=$li;
     $total=$r*$k;
     $total = round($total);
     printf("%.0f",$total)."litros de gasolina";
     echo $total." son el total de litros gastados";
     
        }

        ?>