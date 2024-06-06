document.addEventListener("DOMContentLoaded", function(){
    document.getElementById('formulario').addEventListener('submit', validar);
})

var nombre = document.getElementById('nombre');
var correo = document.getElementById('correo');
var error = document.getElementById('error');

function validar(){
    var mensajeError =[];

    if(nombre.value == "" || nombre.value == null){
        mensajeError.push("El nombre debe completarse")
    }
    if(correo.value == "" || correo.value == null){
        mensajeError.push("El correo debe completarse");
    }
    
    error.innerHTML = mensajeError.join(', ');
    return false;
}


