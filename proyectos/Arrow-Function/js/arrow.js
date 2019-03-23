document.addEventListener("DOMContentLoaded", cargar_pagina);

var tiempo = [0,0,0];

function cargar_pagina() {
	var nuevo_alert = document.createElement("div");
	nuevo_alert.classList = "alert gg alert-info";
	nuevo_alert.innerHTML = `<span>0</span>${tiempo[0]} : <strong>0</strong>${tiempo[1]} : <strong>0</strong>${tiempo[2]}`;
	document.querySelector(".insertar").appendChild(nuevo_alert);
}

empezar_cronometro = () => {
var alert = document.querySelector(".alert");
var iniciar = document.querySelector(".iniciar");

	if(iniciar.innerHTML != 'Detener'){
	var secuencial = setInterval(function(){

		tiempo[2] += 1;
		alert.innerHTML = `<strong>0</strong>${tiempo[0]} : <strong>0</strong>${tiempo[1]} : <strong>0</strong>${tiempo[2]}`;
		var ceros = document.getElementsByTagName('strong');
		
		for(var i=0; i<= tiempo.length; i++){
			if(tiempo[i] > 9){
				ceros[i].style.display = "none";
			}
		}
				if(tiempo[2] == 60){
					tiempo[2] = 0;
					tiempo[1] += 1;

				if(tiempo[1] == 60){
					tiempo[1] = 0;
					tiempo[0] += 1;
				}
		}

		if(iniciar.innerHTML == 'Empezar'){
			clearInterval(secuencial);
		}
	},1000);
			iniciar.innerHTML = 'Detener';
		}else{
			iniciar.innerHTML = 'Empezar';
		}

}

restaurar = () => {
	window.location.reload();
}