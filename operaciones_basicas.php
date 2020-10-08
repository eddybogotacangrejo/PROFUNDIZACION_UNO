<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content=“EDDY_BOGOTA”>
    <meta name="description" content=“PARCIAL_PRIMER_CORTE_ELECTIVA_PROFUNDIZACION_II>
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
    <h1 class="titulo">INGRESE LAS NOTAS</h1>
  <form action="operaciones_basicas.php" method="POST">
      <?php
        if(isset($_POST['nota1'])){
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nota3 = $_POST['nota3'];
            $errores = array();
            $promediouno = 0;
            $promediodos = 0;
            $promediotres = 0;
            $promediototal = 0;
            $resta = 0;
            $division = 0;
            $promedio_deseado = 5;
            $regular = "0 - 3 regular";
            $bueno = "3 - 4 bueno";
            $excelente = "4 - 5 excelente";
            if($nota1 > 5 || $nota1 < 0){
              array_push($errores, "primera nota invalida");
            }
            if($nota2 > 5 || $nota2 < 0){
                array_push($errores, "segunda nota invalida");
            }
            if($nota3 > 5 || $nota3 < 0){
                array_push($errores, "tercera nota invalida");
            }     
//*multiplicacion                                    
              $promediouno = $nota1 * 0.3;
              $promediodos = $nota2 * 0.3;
              $promediotres = $nota3 * 0.4;
//*¨suma              
              $promediototal = $promediouno + $promediodos + $promediotres;
//*resta     
             $resta = $promedio_deseado - $promediototal;
//*division
             $division = $promedio_deseado / $promediototal;                          

              if(count($errores) > 0){
              echo "<div class='error'>";
              for($i=0; $i< count($errores); $i++){
                  echo "<li>".$errores[$i]."</li>";
              } 
              }else{
               echo "<div class='correcto'>";
               if($promediototal >= 0 && $promediototal <= 3){
                echo "<li>".$regular."</li>";  
               }   
               if($promediototal > 3 && $promediototal <= 4){
                echo "<li>".$bueno."</li>";  
               }  
               if($promediototal >= 4){
                echo "<li>".$excelente."</li>";  
               } 
                echo "<li>el promedio total es: ".$promediototal."</li>"; 
              }
              echo "<li>desfase de nota: ".$resta."</li>"; 
              echo "<li>porcentaje total: ".$division."</li>"; 
              echo "</div>";
        }
     ?>
    <fieldset>
    <legend>VALIDACION DE CAMPOS FORMULARIO ELECTIVA PROFUNDIZACION II</legend>
    <p>
    <label for="estudiante">Nombre de estudiante:</label>
    <input type="text" name="estudiante" id="estudiante" placeholder="Ej: eddy" autofocus required>
    </p>
    <p>
      <label for="nombre_materia">Nombre Materia:</label>
      <input type="text" name="nombre_materia" id="nombre_materia" placeholder="Ej: ELECTIVA" autofocus required>
      </p>   
   <p>
   <label for="nota3">Primera Nota:</label>
   <input type="number decimal"  name="nota1" id="nota1" placeholder="Ej: 0 - 5" required>
  </p>
  <p>
    <label for="nota3">Segunda Nota:</label>
    <input type="number decimal"  name="nota2" id="nota2" placeholder="Ej: 0 - 5" required>
   </p>  
   <p>
    <label for="nota3">Tercera Nota:</label>
    <input type="number decimal"  name="nota3" id="nota3" placeholder="Ej: 0 - 5" required>
   </p>    
<p>
<input type="submit" value="VALIDAR">
</p>
</fieldset>
</form>>
  </body>
</html>
