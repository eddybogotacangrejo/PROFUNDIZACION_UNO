function VALIDAR(formulario) {
    if (formulario.nombre_usuario.value.trim().length == 0) {
      alert("Nombre obligatorio");
      return false;
    }
    if (formulario.apellido_usuario.value.trim().length == 0) {
        alert("Apellido obligatorio");
        return false;
    }
    tiene_minusculas_apellido(formulario.apellido_usuario.value);  
    tiene_minusculas_nombre(formulario.nombre_usuario.value);
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!re.test(formulario.email.value)) {
      alert("Email inválido");
      return false;
    }
    if (formulario.celular.value.trim().length < 10) {
        alert("celular no es correcto");
        return false;
    }
    if (formulario.celular.value.trim().length > 10) {
        alert("celular no es correcto");
        return false;
    }   
    valida_celular(formulario.celular.value);
    validasalario(formulario);
  }
  function tiene_minusculas_nombre(texto){
    var letrasminusculas="abcdefghyjklmnñopqrstuvwxyzóíéáú0123456789";  
    for(i=0; i<texto.length; i++){
       if (letrasminusculas.indexOf(texto.charAt(i),0)!=-1){
        alert("campo nombre con minusculas");
        return true;
       }
    }
 }
 function tiene_minusculas_apellido(texto){
    var letrasminusculas="abcdefghyjklmnñopqrstuvwxyzóíéáú0123456789";  
    for(i=0; i<texto.length; i++){
       if (letrasminusculas.indexOf(texto.charAt(i),0)!=-1){
        alert("campo apellido con minusculas");
        i = texto.length;
        return true;
       }
    }
 }
 function validasalario(formulario){
    if (formulario.Totalventas.value.trim().length == 0) {
        alert("Debe ingresar total ventas");
        return false;
    }
    if (formulario.Totalventas.value < 20000) {
        alert("valor de ventas menor a lo esperado");
        return false;
    }
    if (formulario.Totalventas.value > 5000000) {
        alert("valor de ventas mayor a lo esperado");
        return false;
    }
    var salario = 877803;
    var salario_basico = 0;
    var bono = 0;
    var bonificacion = 0;
    if (formulario.Totalventas.value >= 20000) {
        if (formulario.Totalventas.value <= 10000) {
            bono = 0.01;
        }
    }
    if (formulario.Totalventas.value > 100000) {
        if (formulario.Totalventas.value <= 3000000) {
            bono = 0.03;
        }
    }   
    if (formulario.Totalventas.value > 3000000) {
        if (formulario.Totalventas.value <= 5000000) {
            bono = 0.05;
        }
    }    
    bonificacion = formulario.Totalventas.value * bono; 
    salario_basico = bonificacion + salario;
    alert(`El salario es : ${salario_basico}`);
    return false;
    }
    function valida_celular(texto){
        console.log(texto[0]);
        console.log(texto[1]);
        if(texto[0] != '3'){
           alert("el primer numero de celuar debe ser 3"); 
           return false;
        }
        if(texto[1] != '0' && texto[1] != '1' && texto[1] != '2' && texto[1] != '5'){
           alert("el segundo numero de celular debe ser 0 o 1 o 2 o 3 o 5"); 
           return false;
        }
   }  