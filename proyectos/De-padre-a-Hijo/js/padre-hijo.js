function MostrarMenu(){
	var formulario = document.getElementById('formulario');
	formulario.style.display = "block";
}

function btn_formulario() {
	var formulario = document.getElementById('formulario');
	var select_elemento = document.getElementById("select_elemento").value;
	var arreglo_elemento = ['Contenedor', 'Titulo', 'Precio', 'Listas', 'Boton'];
	if(select_elemento != 'Elemento'){
		for(var i=0; i<=arreglo_elemento.length; i++){
			if(select_elemento == arreglo_elemento[i]){
				obtener(arreglo_elemento[i]);
				formulario.style.display = "none";
			}
		}
	}
}

var azul = document.querySelector(".azul");
var verde = document.querySelector(".verde");
var rojo = document.querySelector(".rojo");
var purpura = document.querySelector(".purpura");
var chocolate = document.querySelector(".chocolate");

function obtener(valor){
	switch(valor){
		case 'Contenedor':
		pintarHijo(azul);
		break
		case 'Titulo':
		pintarHijo(verde);
		break
		case 'Precio':
		pintarHijo(rojo);
		break
		case 'Listas':
		pintarHijo(purpura);
		break
		case 'Boton':
		pintarHijo(chocolate);
		break
	}
}

function pintarHijo(elemento){
	var arreglo = elemento.children;
	for(var k=0; k<=arreglo.length; k++){
		arreglo[k].style.background = "pink";
	}
}