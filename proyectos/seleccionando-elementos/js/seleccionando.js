function MostrarElemento(){
var formulario = document.getElementById('formulario');
formulario.style.display = "block";	
}

function btn_formulario(){
	var select_elemento = document.getElementById("select_elemento").value;
	var arreglo_elemento = ["Elemento", "Titulo", "Cuerpo", "Boton", "Listas"];
	
	for(var i=0; i<=arreglo_elemento.length; i++){
			if(select_elemento == arreglo_elemento[i]){
					trasformar(arreglo_elemento[i]);
			}
	}
}

var titulo = document.getElementsByTagName('h3');
var cuerpo = document.getElementsByTagName('body');
var boton = document.getElementsByTagName('button');
var lista = document.getElementsByTagName('li');

function trasformar(valor,valor2) {

	switch(valor){
			case 'Titulo':
			recorrer(titulo);
			break
			case 'Cuerpo':
			recorrer(cuerpo);
			break
			case 'Boton':
			recorrer(boton);
			break
			case 'Listas':
			recorrer(lista);
			break	
		}
}

function recorrer(elemento){
	for(var j=0; j<=elemento.length; j++){
			elemento[j].style.background = "lime";
		}
}