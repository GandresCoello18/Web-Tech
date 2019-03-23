function luchador(valor) {
	var energia = document.getElementById(`energia${valor}`);
	energia.style.display = "block";
	setTimeout(function(){
		energia.style.display = "none";
	},900);

	var puntos_ataque = Math.round(Math.random()*20);

	if(valor == 1){

	var luchador = document.getElementById(`img_vuelta${2}`);
	luchador.style.animation = "parpado 1s 1";
	
	var porcentaje = document.getElementById(`porcentaje${2}`);
	obtener_valor = porcentaje.innerHTML;
	
	}else{

	var luchador = document.getElementById(`img_vuelta${1}`);
	luchador.style.animation = "parpado 1s 1";
	
	var porcentaje = document.getElementById(`porcentaje${1}`);
	obtener_valor = porcentaje.innerHTML;

	}

	obtener_valor = parseInt(obtener_valor) - puntos_ataque;
	porcentaje.innerHTML = `${obtener_valor}`;

	if(valor == 1){
		var barra = document.querySelector(`.barra${2}`);
		barra.style.width = `${obtener_valor}`+'%';

		habilitar(true,false);
	}else{
		var barra = document.querySelector(`.barra${1}`);
		barra.style.width = `${obtener_valor}`+'%';

		habilitar(false,true);
	}


	if(obtener_valor >= 25 && obtener_valor <= 50){
		barra.classList.remove('bg-success');
		barra.classList.add('bg-warning');
	}else if(obtener_valor < 25){
		barra.classList.remove('bg-warning');
		barra.classList.add('bg-danger');
	}

	if(porcentaje.innerHTML < 0){
		alert("El oponente acaba de perder");
		window.location.reload();
	}
}

function habilitar(booll, booll2){
		var botom1 = document.querySelector(".botom1");
		botom1.disabled = booll;

		var botom2 = document.querySelector(".botom2");
		botom2.disabled = booll2;
}