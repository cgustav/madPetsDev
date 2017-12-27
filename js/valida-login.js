$('.message a').click(function () {
    $('form').animate({ height: "toggle", opacity: "toggle" }, "slow");
});

function validaLog(){

    var user = $('#nombreUsuario').val();
    var pass = $('#pwUsuario').val();

    if (user.trim() == '') { //username
        
        alert("Es necesario ingresar un usuario");
        $('#nombreUsuario').focus();
        return false;

    } else if (pass.trim() == '') { // contraseña

        alert("Es necesario ingresar una contraseña");
        $('#pwUsuario').focus();
        return false;

    }else{
        document.formLogin.submit();//enviar (NO-AJAX)
    }   

}

function validaSign() {
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+.)+[A-Z]{2,4}$/i;
    var user = $('#inputUser').val();
    var name = $('#inputName').val();
    var ape = $('#inputApe').val();
    var email = $('#inputEmail').val();
    var passw = $('#inputPw').val();
    var repassw = $('#inputRePw').val();
    var message = $('#inputMessage').val();

    if (user.trim() == '') { //username

        alert("Porfavor, ingresar un usuario");
        $('#inputUser').focus();
        return false;

    } else if (name.trim() == '') { // nombre natural

        alert("Porfavor, ingresar su nombre");
        $('#inputName').focus();
        return false;

    } else if (ape.trim() == '') { //apellidos

        alert("Porfavor, ingresar su(s) apellido(s)");
        $('#inputApe').focus();
        return false;

    } else if (email.trim() == '') { //email

        alert("Porfavor, ingresar un email");
        $('#inputEmail').focus();
        return false;

    } else if (email.trim() != '' && !reg.test(email)) { //email válido
        alert("Porfavor, ingresar un email válido");
        $('#inputEmail').focus();
        return false;

    } else if (passw.trim() == '') { //contraseña
        alert("Porfavor, ingresar una contraseña");
        $('#inputPw').focus();
        return false;

    } else if (repassw.trim() == '') { // reingreso de contraseña
        alert("Porfavor, re-ingrese su contraseña");
        $('#inputRePw').focus();
        return false;
    } else {

        document.formSignUp.submit();//enviar (NO-AJAX)
    }

}