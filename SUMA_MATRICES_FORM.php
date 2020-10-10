<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="autdor" content=“EDDY_BOGOTA”>
    <meta name="description" content=“OPERACIONES_CON_FUNCIONES_ELECTIVA_PROFUNDIZACION_II>
    <meta name="viewport" content="widtd=device-widtd,user-scalable=no">
    <title>SUMA MATRICES CON PHP Y HTML</title>
    <style>
        body{background-color: #264673; 
        box-sizing: border-box; 
        font-family: Arial;
        }
        form{
        background-color: white;
        padding: 10px;
        margin: 100px auto;
        width: 480px;
        } 
        input[type="number decimal"]{
        padding: 15px;
        width: 30px;
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
        TABLE{
          border: 2;
          border-color: black;
        }
        tr{
          align-items: center;
          align-content: center;
        }
        td{
          align-items: center;
          align-content: center;
        }
    </style>    
  </head>
  <body>
  <form action="SUMA_MATRICES_FORM.php" method="POST">
      <H1>SUMA MATRICES CON PHP Y HTML</H1>
      <H1>MATRIZ UNO</H1>
      <TABLE name="matrizuno">
       <tr>   
        <td><input type="number decimal" name="a11"></td>
        <td><input type="number decimal" name="a12"></td>
        <td><input type="number decimal" name="a13"></td>
       </tr>       
       <tr>   
        <td><input type="number decimal" name="a21"></td>
        <td><input type="number decimal" name="a22"></td>
        <td><input type="number decimal" name="a23"></td>
       </tr>  
       <tr>   
        <td><input type="number decimal" name="a31"></td>
        <td><input type="number decimal" name="a32"></td>
        <td><input type="number decimal" name="a33"></td>
       </tr>                
      </TABLE>

      <H1>MATRIZ DOS</H1>
      <TABLE name="matrizdos">
       <tr>   
        <td><input type="number decimal" name="b11"></td>
        <td><input type="number decimal" name="b12"></td>
        <td><input type="number decimal" name="b13"></td>
       </tr>       
       <tr>   
        <td><input type="number decimal" name="b21"></td>
        <td><input type="number decimal" name="b22"></td>
        <td><input type="number decimal" name="b23"></td>
       </tr>  
       <tr>   
        <td><input type="number decimal" name="b31"></td>
        <td><input type="number decimal" name="b32"></td>
        <td><input type="number decimal" name="b33"></td>
       </tr>                
      </TABLE>  
      <?php
$a11 = $_POST['a11'];
$a12 = $_POST['a12'];
$a13 = $_POST['a13'];
$a21 = $_POST['a21'];
$a22 = $_POST['a22'];
$a23 = $_POST['a23'];
$a31 = $_POST['a31'];
$a32 = $_POST['a32'];
$a33 = $_POST['a33'];
$b11 = $_POST['b11'];
$b12 = $_POST['b12'];
$b13 = $_POST['b13'];
$b21 = $_POST['b21'];
$b22 = $_POST['b22'];
$b23 = $_POST['b23'];
$b31 = $_POST['b31'];
$b32 = $_POST['b32'];
$b33 = $_POST['b33'];
$c11 = 0;
$c12 = 0;
$c13 = 0;
$c21 = 0;
$c22 = 0;
$c23 = 0;
$c31 = 0;
$c32 = 0;
$c33 = 0;
$c11=$a11+$b11;
$c12=$a12+$b12;
$c13=$a13+$b13;
$c21=$a21+$b21;
$c22=$a22+$b22;
$c23=$a23+$b23;
$c31=$a31+$b31;
$c32=$a32+$b32;
$c33=$a33+$b33;
echo "<H1>MATRIZ TRES</H1>";
echo "<TABLE name='matriztres'>";
echo "<tr align='center'>";
echo "<td>".$c11."</td>";
echo "<td>".$c12."</td>";
echo "<td>".$c13."</td>";
echo "</tr>";
echo "<tr align='center'>";
echo "<td>".$c21."</td>";
echo "<td>".$c22."</td>";
echo "<td>".$c23."</td>";
echo "</tr>";
echo "<tr align='center'>";
echo "<td>".$c31."</td>";
echo "<td>".$c32."</td>";
echo "<td>".$c33."</td>";
echo "</tr>";
echo "</TABLE>"
?>              
        <p>
            <input type="submit" value="ENVIAR">
            <input type="reset" value="BORRAR">
        </p>    
      </form>
  </body>
</html>
