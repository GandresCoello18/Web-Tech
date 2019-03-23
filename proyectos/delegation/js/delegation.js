
var boton_crear = document.querySelector(".boton_crear");
boton_crear.addEventListener("click" , crear);

function crear(e){
	e.preventDefault();
	var tarea = document.querySelector(".tarea").value;
	var dia = document.querySelector(".dia").value;

	if(tarea == '' || dia == ''){
		alert("campos vacio");
	}else{
		var nueva_tarea = document.createElement("div");
		nueva_tarea.classList = "alert alert-info mt-2";
		nueva_tarea.innerHTML = `Necesito hacer <strong>${tarea}</strong> para la fecha <strong>${dia}</strong>. <strong class="eliminar">X</strong>`;
		document.querySelector(".cosas").appendChild(nueva_tarea);
	}
}

document.body.addEventListener("click", ejecutar);

function ejecutar(e){
	e.preventDefault();
	if(e.target.classList.contains("eliminar")){
		e.target.parentElement.remove();
	}
}