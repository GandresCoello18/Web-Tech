
function btn_formulario(){
	var select_elemento = document.getElementById('select_elemento').value;
	arreglo_elemento = ['Parrafo', 'Subtitulo', 'Imagen'];

	for(var i=0; i<=arreglo_elemento.length; i++){
		if(select_elemento == arreglo_elemento[i]){
			obtener(arreglo_elemento[i]);
		}
	}
}

var parrafos = document.querySelectorAll(".parrafos");
var titulos = document.querySelectorAll(".titulos");
var imagenes = document.querySelectorAll(".imagenes");

function obtener(valor) {
	switch(valor){
		case 'Parrafo':
		colorear(parrafos);
		break
		case 'Subtitulo':
		colorear(titulos);
		break
		case 'Imagen':
		colorear(imagenes);
		break
	}
}

function colorear(elemento) {
	for(var k=0; k<=elemento.length; k++){
		elemento[k].parentElement.style.background = "lime";
	}
}
