document.addEventListener('DOMContentLoaded', function(){

    eventListeners();

    darkMode();


});




function eventListeners(){
    const mobileMenu = document.querySelector('.mobil-menu');

    mobileMenu.addEventListener('click' , menuResponsive);

}

function menuResponsive() {
    const navegacion = document.querySelector('.navegacion');

    // if(navegacion.classList.contains('mostrar')){
    //     navegacion.classList.remove('mostrar');
    // }else{
    //     navegacion.classList.add('mostrar')


    // } el toggle hace lo mismo que todo este codigo

    navegacion.classList.toggle('mostrar');

}

function darkMode() {
    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');


    if(prefiereDarkMode.matches){
        document.body.classList.add('dark-mode')
    } else {
        document.body.classList.remove('dark-mode')
    }

    prefiereDarkMode.addEventListener('change' ,() => document.body.classList.toggle('dark-mode') );

    const botonDarkMode = document.querySelector('.dark-mode-boton');

    botonDarkMode.addEventListener('click' , () => {
        document.body.classList.toggle('dark-mode')
    })
}