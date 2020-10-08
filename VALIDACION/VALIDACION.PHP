<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content=“eddy bogota”>
    <meta name="description" content=“PARCIAL PRIMER CORTE ELECTIVA COMPLEMENTARIA“>
    <meta name="viewport" content="width=device-width,user-scalable=no">
    <link rel="stylesheet" href="css/estilos.css">
    <title>VALIDACION CONVINADAS JAVASCRIPT CON PHP</title>
  </head>
  <body>
    <h1 class="titulo">INGRESE SUS DATOS</h1>
  <form action="VALIDACION.PHP" method="POST">
  <?php
      if(isset($_POST['Totalventas'])){
        $Total_ventas = $_POST['Totalventas']; 
        $celular = $_POST['celular'];
        $salario = 0;
        $salario_basico = 0;
        $bono = 0;
        $bonificacion = 0;
        $salario = 877803;
        $errores = array();      
        if ($celular[0] != '3') {
          array_push($errores, "numero de celular invalido en la primera posicion");
          echo "<div class='error'>"; 
          echo "<li>primer numero de celular invalido</li>";  
          echo "</div>";
          echo '<script language="javascript">alert("primer numero de celular invalido PHP");</script>';
        }
        if ($Total_ventas >= 20000) {
           if ($Total_ventas <= 100000) {
               $bono = 0.01;
             }
         }
        if ($Total_ventas  > 100000) {
           if ($Total_ventas  <= 3000000) {
               $bono = 0.03;
             }
         }   
        if ($Total_ventas  > 3000000) {
           if ($Total_ventas  <= 5000000) {
              $bono = 0.05;
           }
         } 
          $bonificacion = $Total_ventas * $bono; 
          $salario_basico = $bonificacion + $salario;
          echo "<div class='correcto'>"; 
          echo "<li>Salario= ".$salario."</li>";  
          echo "<li>bonificacion= ".$bono."</li>";  
          echo "<li>Total salario= ".$salario_basico."</li>";   
          echo "</div>";
    }       
   ?>
    <fieldset>
    <legend>VALIDACION DE CAMPOS ELECTIVA COMPLEMENTARIA</legend>
    <p>
    <label for="username">Nombre de usuario:</label>
    <input type="text" name="Nombre de usuario" id="nombre_usuario" placeholder="Ej: eddy" autofocus required>
    </p>
    <p>
      <label for="userlastname">Apellido del usuario:</label>
      <input type="text" name="Nombre de usuario" id="apellido_usuario" placeholder="Ej: bogota" autofocus required>
      </p>   
    <p>
    <label for="email">Email:</label>
    <input type="email"  name="email" id="email" placeholder="Ej: nombre@gmail.com" required>
   </p>
   <p>
   <label for="celular">celular:</label>
   <input type="number"  name="celular" id="celular" placeholder="Ej: 3004817713" required>
  </p>
  <p>
    <label for="Totalventas">valor total ventas:</label>
    <input type="number"  name="Totalventas" id="Totalventas" placeholder="Ej: 100" required>
   </p>  
<p>
<input type="submit" value="VALIDAR" onclick="return VALIDAR(this.form)">
</p>
</fieldset>
</form>>
<script src="JS/VALIDACION.JS"></script>
  </body>
</html>
