let botom = document.getElementById('enviar');
	botom.addEventListener("click", enviarCorreo);	

function enviarCorreo(e) {
	e.preventDefault();
	let email = document.getElementById("email").value;
 if (email <= 0) {
 	alert("campos vacios");
 }else if(email.indexOf('@') != -1){
 	alert("correo guardado");
 }else{
 	alert("Usted no escribio un correo electronico");
 }
}