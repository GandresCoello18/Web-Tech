
let boton_enter = document.querySelector(".boton_enter");
boton_enter.addEventListener("mouseenter" , accion);

function accion(e) {
	e.preventDefault();
	var imagen = document.getElementsByTagName('img');
	if(imagen[0].className != "circle"){
		imagen[0].className = "circle";
	}else{
		imagen[0].classList.remove("circle");
	}
}

let boton_leave = document.querySelector(".boton_leave");
boton_leave.addEventListener("mouseleave", accionDos);

function accionDos(e) {
	e.preventDefault();
	var h3 = document.getElementsByTagName('h3');
	h3[1].style.transform = "rotateY(180deg)";
}

let boton_mousemove = document.querySelector(".boton_mousemove");
boton_mousemove.addEventListener("mousemove", accionTres);

function accionTres(e) {
	e.preventDefault();
	var parrafo = document.getElementsByTagName('p');
	var contador = 0;
	var obtener = parrafo[1].innerHTML;
	obtener = parseInt(obtener) + 1;
	parrafo[1].innerHTML = `${obtener}`;
}