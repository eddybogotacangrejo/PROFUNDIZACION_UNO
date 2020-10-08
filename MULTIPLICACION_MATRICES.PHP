<?php
$MULTIPLICA = 0;
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
echo "eL VALOR DE A ES: ".count($A)."</br>";   
echo "eL VALOR DE B ES: ".count($B)."</br>"; 
$k = 0;
for($a=0;$a<count($A);$a++){ 
  for($i=0;$i<count($A);$i++){
    $MULTIPLICA = 0;
    for($j=0;$j<count($B);$j++){
       echo "EL VALOR DE ACUMULADO ES: ".$MULTIPLICA."</BR>";
       $MULTIPLICACION = ($A[$i][$j] * $B[$j][$a]);
       echo "EL VALOR MULTIPLICADO ES: ".$MULTIPLICACION."</BR>";
       $MULTIPLICA = $MULTIPLICA + ($A[$i][$j] * $B[$j][$a]);
       echo "EL VALOR DE ACUMULADO DESPUES DE LA MULTIPLICACION ES: ".$A[$i][$j]." Y ".$B[$j][$a]." ES: ".$MULTIPLICA."</BR>";
     } 
     $C[$i][$a] = $MULTIPLICA;
     echo "EL VALOR DE MULTIPLICACION ES: ".$C[$i][$a]."</br>"; 
    }
}
echo "</br>";         
print_r($C);
?>