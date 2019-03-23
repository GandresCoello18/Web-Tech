var boton_login = document.querySelector(".boton_login");
boton_login.addEventListener("click", ocultar_acceder);

function ocultar_acceder(e){
	e.preventDefault();
	document.getElementById('formulario').style.display = "none";
	document.getElementById("formulario_2").style.display = "block";
}

var registrar = document.querySelector(".registrar");
registrar.addEventListener("click", registrar_cuenta);

function registrar_cuenta(e){
	e.preventDefault();
	var nombre_usuario = document.querySelector(".nombre_usuario").value;
	var contrasena = document.querySelector(".contrasena").value;
	var contrasena_2 = document.querySelector(".contrasena_2").value;
	if(nombre_usuario != '' && contrasena != '' && contrasena_2 != ''){
		if(contrasena == contrasena_2){
			localStorage.setItem("password", contrasena);
		if(nombre_usuario.length >= 7){
			localStorage.setItem("usuario", nombre_usuario);
		}
		document.getElementById("formulario").style.display = "none";
		document.getElementById("formulario_2").style.display = "block";
		}else{
			alert("las contraseñas no coinciden");
		}
	}else{
		alert("campos vacios");
	}

}

var entrar = document.querySelector(".entrar");
entrar.addEventListener("click", iniciar_sesion);

function iniciar_sesion(e){
	e.preventDefault();
	var login_usuario = document.querySelector(".login_usuario").value;
	var login_contrasena = document.querySelector(".login_contrasena").value;

	if(login_usuario != '' && login_contrasena != ''){
		if(login_usuario == localStorage.getItem("usuario") && login_contrasena == localStorage.getItem("password")){
			alert("eres bienvenido");
			formulario_2.reset();
		}
	}else{
		alert("campos vacios");
	}
}