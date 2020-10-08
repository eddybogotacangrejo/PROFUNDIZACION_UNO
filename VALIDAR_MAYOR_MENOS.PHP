<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content=“EDDY_BOGOTA”>
    <meta name="description" content=“SEMANA_4_PRIMER_CORTE_ELECTIVA_PROFUNDIZACION_II>
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
    <h1 class="titulo">INGRESE LOS VALORES</h1>
  <form action="VALIDAR_MAYOR_MENOS.PHP" method="POST">
      <?php
        if(isset($_POST['valor1'])){
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];
            $valor3 = $_POST['valor3'];
            $errores = array();
            $menor;
            $mayor;        
            if($valor1 >= $valor2 ){
              $mayor = $valor1;
              $menor = $valor2;
            }else{
                $mayor = $valor2;
                $menor = $valor1;
            }
            if($valor3 > $mayor){
                $mayor = $valor3;
                if($valor3 < $menor){
                 $menor = $valor3;   
                }
            }else{
                if($valor3 < $menor){
                    $menor = $valor3;   
                   }
            }

              if(count($errores) > 0){
              echo "<div class='error'>";
              for($i=0; $i< count($errores); $i++){
                  echo "<li>".$errores[$i]."</li>";
              } 
              }else{
                echo "<div class='correcto'>";
                echo "<li>el numero menos es: ".$menor."</li>";  
                echo "<li>el numero mayor es: ".$mayor."</li>"; 
              }
              echo "</div>";
        }
     ?>
    <fieldset>
    <legend>VALIDACION DE VALORES ELECTIVA PROFUNDIZACION II</legend>
   <label for="valor1">Primera Valor:</label>
   <input type="number decimal"  name="valor1" id="valor1" placeholder="Ej: 0" required>
  </p>
  <p>
    <label for="valor2">Segunda Valor:</label>
    <input type="number decimal"  name="valor2" id="valor2" placeholder="Ej: 0" required>
   </p>  
   <p>
    <label for="valor3">Tercera Valor:</label>
    <input type="number decimal"  name="valor3" id="valor3" placeholder="Ej: 0" required>
   </p>    
<p>
<input type="submit" value="VALIDAR">
</p>
</fieldset>
</form>>
  </body>
</html>
