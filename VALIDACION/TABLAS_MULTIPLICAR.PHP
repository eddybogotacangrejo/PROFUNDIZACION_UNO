<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content=“EDDY_BOGOTA”>
    <meta name="description" content=“EJERCICIO_TABLAS_ELECTIVA_PROFUNDIZACION_II>
    <meta name="viewport" content="width=device-width,user-scalable=no">
    <title>valida notas</title>
    <style>
        body{background-color: #264673; box-sizing: border-box; font-family: Arial;}
        form {
            background-color: white;
            padding: 10px;
            margin: 100px auto;
            width: 450px;
        } 
        input[type=text], input[type="number decimal"]{
        padding: 10px;
        width: 380px;
        }
        input[type="submit"]{
         border: 0;
         background-color: #ED8824;
         padding: 10px 20px;
        }
        .error{
          background-color: #FF9185;
          font-size: 12px;
          padding: 10px;
        }
        .correcto{
          background-color: #A0DEA7;
          font-size: 12px;
          padding: 10px;
        }       
        h1{
          background-color: white;
          font-size: 30px;
          font-style: italic;
        }
    </style>    
  </head>
  <body>
    <h1 class="titulo">INGRESE LAS TABLA PARA VISUALIZAR EL RESULTADO</h1>
  <form action="TABLAS_MULTIPLICAR.PHP" method="POST">
      <?php
        if(isset($_POST['tabla'])){
            $tabla = $_POST['tabla'];
            $errores = array();
            if($tabla == 0){
              array_push($errores, "numero invalido para realizar la demostracion");
            }
              if(count($errores) > 0){
              echo "<div class='error'>";
              for($i=0; $i< count($errores); $i++){
                  echo "<li>".$errores[$i]."</li>";
              } 
              }else{
               echo "<div class='correcto'>";
               echo "<li>TABLA DE MULTIPLICAR UTILIZANDO FOR: ".$tabla."</li>";
               for($i=1;$i<11;$i++){
                $numero = $tabla * $i;
                echo "<li>TABLA ".$tabla. " X ".$i." = ".$numero." </li>";
               }
               echo "<li>TABLA DE MULTIPLICAR UTILIZANDO WHILE: ".$tabla."</li>";
               $i = 1;
               while($i <= 10){
                $numero = $tabla * $i;
                echo "<li>TABLA ".$tabla. " X ".$i." = ".$numero." </li>"; 
                $i = $i+1; 
               }
              }
              echo "</div>";
        }       
     ?>
 <!--
     La sentencia For realiza la operacion incrementando la operacion o decrementando la operacion
     hasta que llegue a esta.

     La sentencia While realizar la operacion hasta de esta no se cumpla.
 -->        
    <fieldset>
    <legend>EJECRCICIO DE TABLAS DE MULTIPLICAR PROFUNDIZACION II</legend> 
<p>
   <label for="tabla">Digite la tabla de multiplicar a mostrar:</label>
   <input type="number decimal"  name="tabla" id="tabla" placeholder="Ej: 1" required>
</p>  
<p>
<input type="submit" value="VALIDAR">
</p>
</fieldset>
</form>>
  </body>
</html>
