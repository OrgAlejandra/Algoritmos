<?php
$action= $_GET['action'];
if($action == 'ejercicio 8'){
 
$millas = $_POST['millas'];
$milimetros= $millas * 1609000;
$centimetros= $millas * 160930 ;
$metros = $millas * 1609.344 ;
$pies=$millas* 5280;
$pulgadas=$millas* 63360;

echo  "<h1><center>la convercion a milimetros es: $milimetros</center></h1><br/>";

echo  "<h1><center>la convercion a centimetros es: .$centimetros </center><h1><br/>";
echo  "<h1><center>la convercion a metros es: .$metros</center><h1></br>";
echo  "<h1><center>la convercion a pies es: .$pies</center><h1></br>";
echo  "<h1><center> la convercion a pulgadas es: .$pulgadas</center><h1></br>";

}

?>

