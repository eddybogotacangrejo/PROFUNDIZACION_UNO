<?php
//require('FUNCIONES_OPERACIONES.php');  
include_once('FUNCIONES_OPERACIONES.php');
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$operador = $_POST['operador'];
$ope = new calcula();
switch($operador){
   case "+": 
    echo "<p>".$n1." - ".$n2." = ".$ope->restar($n1,$n2)."</p>";break;  
   case "-": echo "<p>".$n1." - ".$n2." = ".$ope->restar($n1,$n2)."</p>";break; 
   case "-": echo "<p>".$n1." * ".$n2." = ".$ope->multiplicar($n1,$n2)."</p>";break;
   case "-": echo "<p>".$n1." / ".$n2." = ".$ope->dividir($n1,$n2)."</p>";break;
  }
?>   