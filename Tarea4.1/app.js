let imagenes = [
    {
        "url": "resources/1.jpg",
        "nombre": "Premiacion CND",
        "descripcion" : "El estudiante Fernando Diaz gana premio al mejor periodista CLIC del CND 2024"
    },
    {
        "url" : "resources/2.jpg",
        "nombre" : "Estudiantes Regional 07",
        "descripcion" : "Estudiantes representando a la Regional 07 de Educacion"
    },
    {
        "url" : "resources/3.jpg",
        "nombre" : "Equipo de logistica de la Regional 07",
        "descripcion" : "Estudiante representando a la Regional 07 de Educacion en el Equipo de Logistica"
    }
]

let atras = document.getElementById('atras');
let adelante = document.getElementById('adelante');
let imagen = document.getElementById('img');
let puntos = document.getElementById('puntos');
let texto = document.getElementById('texto');
let actual = 0;
posicionCarrusel()

atras.addEventListener('click', function(){
    actual-=1
    if(actual == -1){
        actual = imagenes.length -1
    }
    imagen.innerHTML = `<img src="${imagenes[actual].url}" alt="imagen 1" class="img" loading="lazy">`
    texto.innerHTML = `
    <h3>${imagenes[actual].nombre}</h3>
    <p>${imagenes[actual].descripcion}</p>
    `
    posicionCarrusel()
})

adelante.addEventListener('click', function(){
    actual+=1
    if(actual == imagenes.length){
        actual = 0
    }
    imagen.innerHTML = `<img src="${imagenes[actual].url}" alt="imagen 1" class="img" loading="lazy">`
    texto.innerHTML = `
    <h3>${imagenes[actual].nombre}</h3>
    <p>${imagenes[actual].descripcion}</p>
    `
    posicionCarrusel()
})

function posicionCarrusel(){
    puntos.innerHTML = ""
    for(var i = 0; i < imagenes.length; i++){
        if(i==actual){
            puntos.innerHTML += '<p class="bold">.</p>'
        }
        else{
            puntos.innerHTML += '<p>.</p>'
        }
    }
}