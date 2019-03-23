let tabla = [{id:1, usuario: 'jairo', apellido: 'toapanta'}, {id:2, usuario: 'carlos', apellido: 'munoz'}, {id:3, usuario: 'santiago', apellido: 'alvaro'}];
var boton_DB = document.querySelector(".boton_DB").addEventListener("click", verificar);

var digitar = prompt("Digita el usuario a buscar");

function verificar(){
	
let consulta = (usuario, callback) =>{

	for(var i=0; i<=tabla.length; i++){
		if(tabla[i].usuario != usuario){
		callback("se encontro un error");
	}else{
		callback(null, tabla[i]);
   }
	}

}


consulta(digitar, (err, valor) => {
	var nuevo = document.createElement("div");
	if(err){
		nuevo.classList = "alert alert-danger";
		nuevo.innerHTML = `<h5 class="text-center">El usuario no existe</5h>`;
	}else{
		nuevo.classList = "alert alert-success";
		nuevo.innerHTML = `<h5 class="text-center">Datos del usuario</h5>
							<p class="text-center">${valor.id}, ${valor.usuario}, ${valor.apellido}</p>
							`;
		console.log(valor);
	}
		document.querySelector(".insertar").appendChild(nuevo);
});

}