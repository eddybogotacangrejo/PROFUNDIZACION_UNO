<?php
if(($_POST['n1']) != "" and ($_POST['n1']) != "" )){
  if($_POST['operador'] == "+"){
      print($resultado = $_POST['n1'] + $_POST['n1']);
      print('<br><a href=calc.html">volver</a>');
  }
  elseif($_POST['operador'] == "-"){
    print($resultado = $_POST['n1'] - $_POST['n1']);
    print('<br><a href=calc.html">volver</a>');
  }
  elseif($_POST['operador'] == "*"){
    print($resultado = $_POST['n1'] * $_POST['n1']);
    print('<br><a href=calc.html">volver</a>');
  }
  elseif($_POST['operador'] == "/"){
    print($resultado = $_POST['n1'] / $_POST['n1']);
    print('<br><a href=calc.html">volver</a>');
  }
}
?>