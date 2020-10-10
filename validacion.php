<?php
if(($_POST['n1'] != "") and ($_POST['n2'] != "" )){
  if($_POST['operador'] == "+"){
      print($resultado = $_POST['n1'] + $_POST['n2']);
      print('<br><a href=FUNCIONES_CON_PHP.php>volver</a>');
  }
  elseif($_POST['operador'] == "-"){
    print($resultado = $_POST['n1'] - $_POST['n2']);
    print('<br><a href=FUNCIONES_CON_PHP.php>volver</a>');
  }
  elseif($_POST['operador'] == "*"){
    print($resultado = $_POST['n1'] * $_POST['n2']);
    print('<br><a href=FUNCIONES_CON_PHP.php>volver</a>');
  }
  elseif($_POST['operador'] == "/"){
    print($resultado = $_POST['n1'] / $_POST['n2']);
    print('<br><a href=FUNCIONES_CON_PHP.php>volver</a>');
  }
  elseif($_POST['operador'] == "p"){
    print($resultado = $_POST['n1'] * $_POST['n1']);
    print('<br><a href=FUNCIONES_CON_PHP.php>volver</a>');
  }  
}
?>