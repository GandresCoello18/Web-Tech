
function seleccionar(){
	var formulario = document.getElementById('formulario');
	formulario.style.display = "block";
}

function crear_elemento(){
	var seleccionar_elemento = document.getElementById("seleccionar_elemento").value;
	var arreglo_seleccionar = ['div', 'parrafo', 'lista', 'enlace', 'boton', 'caja_de_texto'];
	for(var i=0; i<=arreglo_seleccionar.length; i++){
		if(seleccionar_elemento == arreglo_seleccionar[i]){
			obtener(arreglo_seleccionar[i]);
		}
	}
}

var caja = document.querySelector(".caja");
var parrafo = document.querySelector(".parrafo");
var lista = document.querySelector(".lista");
var enlace = document.querySelector(".enlace");
var botones = document.querySelector(".botones");
var caja_texto = document.querySelector(".caja_texto");

function obtener(valor){
	switch(valor){
		case 'div':
		reconocer(caja,'div');
		break
		case 'parrafo':
		reconocer(parrafo,'p');
		break
		case 'lista':
		reconocer(lista,'li');
		break
		case 'enlace':
		reconocer(enlace,'a');
		break
		case 'boton':
		reconocer(botones,'button');
		break
		case 'caja_de_texto':
		reconocer(caja_texto,'input');
		break
	}
}

function reconocer(area,elemento){
	var nuevo = document.createElement(elemento);
	nuevo.innerText = `Soy un elemento ${elemento}`;
	switch(elemento){
		case 'div':
		nuevo.className = 'clase_caja';
		break
		case 'p':
		nuevo.className = 'clase_parrafo';
		break
		case 'li':
		nuevo.className = 'clase_lista';
		break
		case 'a':
		nuevo.className = 'clase_enlace';
		nuevo.setAttribute("target", "_blank");
		nuevo.setAttribute("href", "www.google.com");
		break
		case 'button':
		nuevo.classList = 'btn btn-success mt-1';
		break
		case 'input':
		nuevo.setAttribute("type", "text");
		nuevo.className = "clase_input";
		break
	}
	area.appendChild(nuevo);
}