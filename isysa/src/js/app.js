

document.addEventListener('DOMContentLoaded', function() {
    iniciarApp();
});

function iniciarApp(){
  //  consultarAPI();//consulta api en el backend de php
    alerta();
}

function alerta(){
    const alerta = document.querySelector('.alerta');
    setTimeout(() => {
        alerta.remove();
    }, 3000);
}