<?php
$arreglo = [96,20,11,50,01]; 
echo "arreglo desordenado: "."</br>"; 
print_r($arreglo);
echo "</br>";
echo "arreglo ordenado:  "."</br>";
sort($arreglo,SORT_NUMERIC);
print_r($arreglo); 
//ordenamiento de vector dum
$arreglo1 = [96,20,11,50,01]; 
echo "</br>"; 
echo "arreglo1 desordenado: "."</br>"; 
print_r($arreglo1); 
echo "</br>"; 
for($i=0;$i<count($arreglo1);$i++){
    for($j=0;$j<count($arreglo1);$j++){
     if($arreglo1[$j] > $arreglo1[$i]){
        $aux = $arreglo1[$j];
        $arreglo1[$j] = $arreglo1[$i];
        $arreglo1[$i] = $aux;
     } 
    }
  }
  echo "arreglo1 ordenado: "."</br>"; 
  print_r($arreglo);  
//vectores alfanumericos
echo "</br>";
$frutas =["naranja","fresa","mora","uva","melon","piña"];
var_dump($frutas);
sort($frutas,SORT_STRING);
echo "</br>";
var_dump($frutas);
sort($frutas,SORT_ASC);
echo "</br>";
var_dump($frutas);
$frutas = array_reverse($frutas);
echo "</br>";
var_dump($frutas);
echo "</br>";
//segundo ejemplo
$registro[]= 79220460;
$registro[]="eddy bogota";
$registro[]="bosa chicala";
var_dump($registro);
echo "</br>";
$registro2["dni"] = 79220460;
$registro2["Nombre"] = "eddy bogota";
$registro2["Direccion"] = "Bosa Chicala";
var_dump($registro2);
echo "</br>";
foreach($registro2 as $clave => $valor){
    echo "Para la clave ".$clave." el valore es ".$valor."</br>";
}
$registro2["dni"] = 1022333825;
$registro2["Nombre"] = "maria del mar";
$registro2["Direccion"] = "soacha coontry";
echo "</br>";
foreach($registro2 as $clave => $valor){
    echo "Para la clave ".$clave." el valore es ".$valor."</br>";
}
?>