
var nombre = document.querySelector(".nombre");
nombre.addEventListener("blur", validar_nombre);

function validar_nombre(){
	if(nombre.value.length > 0){
		alert("exito");
		nombre.classList = "form-control bg-success";
	}else{
		alert("campo vacio");
		nombre.classList = "form-control bg-danger"
	}
}

var correo = document.querySelector(".correo");
correo.addEventListener("blur", validar_correo);

function validar_correo(){
	if(correo.value.indexOf('@') != -1){
		alert("Si es un correo electronico");
	}else{
		alert("No es un correo electronico");
	}
}

var telefono = document.querySelector(".telefono");
telefono.addEventListener("focus", validar_telefono);

function validar_telefono(){
	telefono.classList = "form-control border";
}

var mensaje = document.querySelector(".mensaje");
mensaje.addEventListener('copy', validar_mensaje);
mensaje.addEventListener('paste', validar_mensaje);
mensaje.addEventListener('cut', validar_mensaje);

function validar_mensaje(){
	alert("No puedes copiar el texto, ni pegar texto, ni cortar texto");
}

var enviar = document.querySelector(".enviar");
enviar.addEventListener("click", validar_formulario);

function validar_formulario(e){
	e.preventDefault();
	var nuevo = document.createElement("div");
	if(nombre.value != '' && correo.value != '' && telefono.value != '' && mensaje.value != ''){
		nuevo.classList = 'alert alert-success mt-3';
		nuevo.innerText = 'Formulario enviado';
	}else{
		nuevo.classList = 'alert alert-danger';
		nuevo.innerText = 'Se detecto campo vacio';
	}
	document.querySelector(".mensaje-alert").appendChild(nuevo);
	setTimeout(function(){
		nuevo.remove();
		window.location.reload();
	},2000);	
}