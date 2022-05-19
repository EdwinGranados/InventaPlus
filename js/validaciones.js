function ValidarClave(clave1, clave2) {
    console.log(clave1, clave2);
    if(clave1 == clave2){  
        form1.action = '../controller/controllerLogin.php?tipo=rcc'
    }else{
        form1.action = 'restablecerContraseña.php?usu=-2&CambioClave=-1'
    }
    form1.submit
}