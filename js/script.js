//--- variables ---
let intentos = 6;
let palabraSelecionada = '';
let palabraEnmascarada = '';

//-- vinculación con elementos HMTL --
let spanIntentos = document.getElementById('span-intestos');
let h3Palabra = document.getElementById('h3-palabra');
let botonReinicio = document.getElementById('boton-reiniciar');
let botonIniciar = document.getElementById('boton-iniciar');
let cajaTexto = document.getElementById('text-ingreso');
let botonVerificar = document.getElementById('boton-verificar');
let seccionMensajes = document.getElementById('seccion-mensajes');

//-- seccion de escuchar eventos --
botonReinicio.addEventListener('click', reiniciarJuego);
botonIniciar.addEventListener('click', inciarJuego);
botonVerificar.addEventListener('click', validarTexto);

//Funcion para tomar un numero aleatorio;
function aleatorio(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min)}

//-- funciones de control --
function inciarJuego(){
    spanIntentos.innerHTML = intentos;
    palabraSelecionada = palabras[aleatorio(0, palabras.length-1)];
    palabraSelecionada = palabraSelecionada[0]
    palabraEnmascarada = enmascararPalabra();
    h3Palabra.innerHTML = palabraEnmascarada}


function enmascararPalabra(){
    let caracter = '';
    let palabra = '';
    for(let i=0; i<= palabraSelecionada.length-1; i++){
        if(aleatorio(0,1)==0){
            caracter = '_'
        }
        else {
            //caracter = palabraSelecionada.charAt(i);
            caracter = palabraSelecionada[i];
        }
        palabra = palabra + caracter}
    return palabra}


function reiniciarJuego(){
    window.location.reload()}


function validarTexto(){
    let texto = cajaTexto.value;
    if(intentos>0){
        if(isNaN(texto)){
            if(texto.length == 1){
                verificarTexto(texto);
            }else {
                alert('ingreso más de un caracter');
                cajaTexto.value = ''}
        }
        else{
            alert('ingreso un caracter no valido');
            cajaTexto.value = ''}
    } else {
        botonVerificar.disabled = true;
        alert('Ya no tienes intentos disponibles, reincia un juego nuevo')}}


function verificarTexto(caracter){
    let palabra = '';
    let coincidencias = 0;

    for(let i=0; i<=palabraSelecionada.length-1; i++){
        if(palabraSelecionada[i] == caracter){
            coincidencias++;
            palabra = palabra + caracter}
        else{
            palabra = palabra + palabraEnmascarada[i]}
    }
    if(coincidencias >= 1){
        palabraEnmascarada = palabra;
        h3Palabra.innerHTML = palabraEnmascarada;
        crearMensaje('😊¡Felicitaciones!, el caracter '+ caracter +' tiene, '+ coincidencias +' coincidencias');
    }
    else{
        intentos--;
        crearMensaje('😌Lo siento no se encontro coincidencias con el caracter '+ caracter);
        spanIntentos.innerHTML = intentos;
    }
    if(intentos>0){
        if(palabraEnmascarada == palabraSelecionada){
            crearMensaje("Felicitaciones has ganado la partida")}
    }
    else{
        crearMensaje("Lo siento perdistes la partida")}
    cajaTexto.value = ''}


function crearMensaje(texto){
    let parrafo = document.createElement('p');
    parrafo.innerHTML = texto;
    seccionMensajes.appendChild(parrafo)}