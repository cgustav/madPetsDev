var respuesta = 0;
var numeros = "0123456789";

    //
    //Función para verificar números |---------         ---------|
    //
function tiene_numeros(texto) {
    respuesta = 0;
    for (i = 0; i < texto.length; i++) {
        if (numeros.indexOf(texto.charAt(i), 0) != -1) {
            respuesta = 1;
        }

    }
    if (respuesta == 1) {
        alert("Solo puede ingresar letras!");
        document.nombreIdElemento.campo1.value = "";
        document.nombreIdElemento.campo1.focus();
    }
    //
    //Función para verificar letras |---------         ---------|
    //
    var letras = "abcdefghijklmnopqrstuvwxyz";
    function tiene_letras(texto) {
        respuesta = 0;
        texto = texto.toLowerCase();
        for (i = 0; i = texto.length; i++) {
            if (letras.indexOf(texto.charAt(i), 0) != -1) {
                respuesta = 1;
            }
        }
        if (respuesta == 1) {
            alert("Solo se pueden ingresar números");
            document.nombreIdElemento.campo1.value = "";
            document.nombreIdElemento.campo1.focus();

        }

    }

}