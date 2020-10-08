<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content=“EDDY_BOGOTA”>
    <meta name="description" content=“EJERCICIO_SEMANA_2_ELECTIVA_PROFUNDIZACION_II>
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
        input[type=text], input[type="password"]{
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
    <h1 class="titulo">INGRESE LOS DATOS DE LOGEO</h1>
  <form action="validacion_formulario.php" method="POST">
      <?php
        if(isset($_POST['USUARIO'])){
            $PASSWORD = $_POST['PASSWORD'];
            $errores = array();
            if($PASSWORD == "12345678" || $PASSWORD == "qwertyui"){
                array_push($errores, "Password invalido");
            }                          
              if(count($errores) > 0){
              echo "<div class='error'>";
              for($i=0; $i< count($errores); $i++){
                  echo "<li>".$errores[$i]."</li>";
              } 
              }else{
               echo "<div class='correcto'>";  
               echo "<li>Password ".$PASSWORD."</li>";  
               echo "<li>LOGEO CORRECTA</li>"; 
              }
              echo "</div>";
        }
     ?>
    <fieldset>
    <legend>VALIDACION DE CAMPOS FORMULARIO ELECTIVA PROFUNDIZACION II</legend>
    <p>
    <label for="estudiante">USUARIO:</label>
    <input type="text" name="USUARIO" id="USUARIO" placeholder="Ej: Eddy" autofocus required>
    </p>
    <p>
      <label for="PASSWORD">PASSWORD:</label>
      <input type="password" name="PASSWORD" id="PASSWORD" placeholder="Ej: */1qAZWSX" autofocus required>
      </p>     
<p>
<input type="submit" value="VALIDAR">
</p>
</fieldset>
</form>>
  </body>
</html>
