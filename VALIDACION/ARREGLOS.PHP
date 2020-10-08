<?php
$PELICULAS = array("cenicienta","el lobo de wall street","El señor de los anillos");
var_dump($PELICULAS); 
echo "la segunda pelicula es:".$PELICULAS[1]."";
echo "<h1>LAS PELICULAS SON </h1>";
echo "<ul>";
for($i=0;$i<count($PELICULAS);$i++ ){
   echo "<li>las peliculas son: ".$PELICULAS[$i]."</li>";
}
echo "</ul>";

$PERSONAS = array(
 'nombre' => 'eddy',
 'apellido' => 'bogota',
 'edad' => 37
);
var_dump($PERSONAS); 

foreach($PERSONAS as $variable => $contenido  ){
     echo "<br>la variables es ".$variable." y su contenido es: ".$contenido."</br>";
}

$num1 = array(1,2,3,4,7);
$num2 = array(2,4,8,5,9);
for($i=0;$i<count($num2);$i++ ){
    $resultado = $num1[$i] + $num2[$i]; 
    echo "<li>la suma de ".$num1[$i]." + ".$num2[$i]." = ".$resultado;
 }
?>
<form action="ARREGLOS.PHP" method="POST">
<p>
   <label for="numero1">Digite numero uno:</label>
   <input type="number decimal"  name="numero1" id="numero1" placeholder="Ej: 1" required>
</p>  
<p>
   <label for="numero2">Digite numero dos:</label>
   <input type="number decimal"  name="numero2" id="numero2" placeholder="Ej: 1" required>
</p>  
<p>
<input type="submit" value="VALIDAR">
</p>
</form>>
      <?php
        if($_POST){
            $numero2 = $_POST['numero2'];
            $numero1 = $_POST['numero1'];
            $DIVISION = $numero2 / $numero1;
            echo "<li>la DIVISION de ".$numero1." CON ".$numero2." = ".$DIVISION;
        }
     ?>