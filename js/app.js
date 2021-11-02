var formulario = document.getElementById ('formulario');

formulario.addEventListener('submit', function(e){
    e.preventDefault();

    var datos = new FormData (formulario)

    console.log (datos)
})