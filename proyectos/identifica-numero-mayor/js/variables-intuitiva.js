function insertar_numeros(){
	for (var i = 0; i <= 5; i++) {
		var insertar = prompt(`Ingresa un numero ya se entero o decimal, para el cuadro # ${i}?`);
		
		if(insertar == null || insertar == ''){
			insertar = "0";
	}

	var elemento = document.getElementById(`valor${i}`);
	elemento.style.background = "royalblue";
		elemento.innerHTML = `${insertar}`;
	}

	let btn_verificar = document.querySelector(".botom_verificar");
	btn_verificar.disabled = false;

	let botom_empezar = document.querySelector(".botom_empezar");
	botom_empezar.disabled = true;
}

function reiniciar(){
	window.location.reload();
}

function verificar(){
	var arreglo_numero = [];
	for (var i = 0; i <= 5; i++) {
		var verificar_elemento = document.getElementById(`valor${i}`);
		var obtener = verificar_elemento.innerHTML;
		arreglo_numero.push(Number(obtener));
	}
			calcular(arreglo_numero);		
}

function calcular(arreglo_numero) {
	console.log(arreglo_numero);
	var contador = 0;
	for(var j=0; j<=arreglo_numero.length; j++){
		for(var k=0; k<=arreglo_numero.length; k++){
			if(arreglo_numero[j] > arreglo_numero[k]){
				 contador = contador + 1;
				 console.log(arreglo_numero[j]);
				if(contador == 5){
					var colorear_elemento = document.getElementById(`valor${j}`);
					colorear_elemento.style.background = "lime";
					var exito = true;
				}
			}
		}
		contador = 0;
	}
	if(!exito){
			alert("No existen numeros mayores o insertastes caracteres.");
		}
}
