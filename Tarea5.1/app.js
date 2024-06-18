document.addEventListener("DOMContentLoaded", function(){
    var form = document.getElementById('formulario')
    form.addEventListener('button', validar);
})

var valores = document.getElementById('valores');
var semanales = document.getElementById('semanales');
var final = document.getElementById('final')
var trabajo = document.getElementById('trabajo')
var part = document.getElementById('participacion')


function calcular(){
    var result = validar()
    if (result == false){
        var calificacionFinal;
        calificacionFinal = parseFloat(valores.value)+ parseFloat(semanales.value)+ parseFloat(final.value)+parseFloat(trabajo.value)+parseFloat(part.value);
        calificacionF.innerHTML = calificacionFinal
    }
        
    
}

function validar(){
    var mensajeError =[];

    if(valores.value == "" || valores.value == null){
        mensajeError.push("La calificacion de Actitudes y Valores debe completarse")
    }
    if (valores.value <= 0 || valores.value > 5){
        mensajeError.push("Ingresa una calificación valida para Actitudes y Valores")
    }
    if(semanales.value == "" || semanales.value == null){
        mensajeError.push("La calificacion de Actividades Semanales debe completarse")
    }
    if (semanales.value <= 0 || semanales.value > 30){
        mensajeError.push("Ingresa una calificación valida para Actividades Semanales")
    }
    if(final.value == "" || final.value == null){
        mensajeError.push("La calificacion de Evaluación Final debe completarse")
    }
    if (final.value <= 0 || final.value > 40){
        mensajeError.push("Ingresa una Evaluación Final para Actividades Semanales")
    }
    if(trabajo.value == "" || trabajo.value == null){
        mensajeError.push("La calificacion de Trabajo Final debe completarse")
    }
    if (trabajo.value <= 0 || trabajo.value > 15){
        mensajeError.push("Ingresa una Trabajo Final para Actividades Semanales")
    }
    if(part.value == "" || part.value == null){
        mensajeError.push("La calificacion de Participación debe completarse")
    }
    if (part.value <= 0 || part.value > 10){
        mensajeError.push("Ingresa una Participación para Actividades Semanales")
    }

    error.innerHTML = mensajeError.join(', ');
    
    return false;
}