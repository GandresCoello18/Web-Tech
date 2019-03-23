
function agregar(){
	var seleccionar_elemento = document.getElementById('seleccionar_elemento').value;
	arreglo_elemento = ['rotar', 'fondo', 'clase', 'cambiar_texto', 'dirigir_pagina'];
	for(var i=0; i<= arreglo_elemento.length; i++){
		if(seleccionar_elemento == arreglo_elemento[i]){
			obtener(arreglo_elemento[i]);
		}
	}
}

function obtener(valor) {
var elemento_li = document.getElementsByTagName('li');
var enlace = document.getElementsByTagName('a');
	for(var j=0; j<=elemento_li.length; j++){
		switch(valor){
			case 'rotar':
			if(j%2 == 0){
			elemento_li[j].style.transform = "rotate(15deg)";
			}else{
			elemento_li[j].style.transform = "rotate(-15deg)";	
			}
			break
			case 'fondo':
			if(j%2 == 0){
				elemento_li[j].style.background = "aqua";
			}
			break
			case 'clase':
			if(j%2 == 0){
				elemento_li[j].classList = "bg-danger";
			}
			break
			case 'cambiar_texto':
			if(j%2 != 0){
				elemento_li[j].innerText = "Soy el nuevo texto";
				elemento_li[j].style.color = "red";
			}
			break
			case 'dirigir_pagina':
			enlace[j].setAttribute("href", "www.google.com");
			break
		}
	}
}