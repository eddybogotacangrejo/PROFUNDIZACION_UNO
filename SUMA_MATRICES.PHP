<?php
$A = array(array("1","3","5"),
           array("2","4","6"),
           array("7","8","9"));   
$B = array(array("-5","-3","9"),
           array("1","4","6"),
           array("7","3","8"));  
print_r($A);    
echo "</br>";         
print_r($B);
echo "</br>";  
echo "EL VALOR DE A ES: ".count($A)."</br>";   
echo "EL VALOR DE B ES: ".count($B)."</br>"; 
if(count($A) == count($B)){ 
  for($i=0;$i<count($A);$i++){
    for($j=0;$j<count($B);$j++){
       $C[$i][$j] = ($A[$i][$j] + $B[$i][$j]);
       echo "EL VALOR DE ACUMULADO DESPUES DE LA SUMA ES: ".$A[$i][$j]." Y ".$B[$i][$j]." ES: ".$C[$i][$j] ."</BR>";
     } 
  }
}
echo "</br>";         
print_r($C);
?>