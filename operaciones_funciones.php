<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content=“EDDY_BOGOTA”>
    <meta name="description" content=“OPERACIONES_CON_FUNCIONES_ELECTIVA_PROFUNDIZACION_II>
    <meta name="viewport" content="width=device-width,user-scalable=no">
    <title>OPERACIONCON FUNCIONES CON PHP</title>
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
        input[type="reset"]{
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
      <H1>OPERACIONES BASICAS CON FUNCIONES EN PHP</H1>
      <H2>OPERACIONES NORMALES EN PHP</H2>
      <form action="LLAMAR_FUNCIONES.php" method="POST">
         <select name="operador">
           <option value="+">+</opcion>
           <option value="-">-</opcion>
           <option value="*">*</opcion>
           <option value="/">/</opcion>
         </select></br>
         <p>
            <label for="n1">INGRESE EL PRIMER NUMERO:</label>
            <input type="number decimal"  name="n1" id="n1" placeholder="Ej: 0" required>
        </p> 
        <p>
            <label for="n2">INGRESE EL SEGUNDO NUMERO:</label>
            <input type="number decimal"  name="n2" id="n2" placeholder="Ej: 0" required>
        </p>  
        <p>
            <input type="submit" value="ENVIAR">
            <input type="reset" value="BORRAR">
        </p>    
      </form>
  </body>
</html>
