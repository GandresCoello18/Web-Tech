document.addEventListener("DOMContentLoaded", inicio);

class Registrar_Producto{
	constructor(producto, cantidad){
		this.producto = producto;
		this.cantidad = cantidad;
	}

	insertar(){
		if(this.producto == '' || this.cantidad == ''){
			alert("Campos vacio, por favor vuelve a intentarlo");
		}else{

			var c = localStorage.getItem("contador");
			c = Number(c) + 1;
			localStorage.setItem("contador", c);

			localStorage.setItem(`producto${c}`, this.producto);
			localStorage.setItem(`cantidad${c}`, this.cantidad);

			var elemento_div = document.createElement("div");
			elemento_div.classList = "alert alert-info mt-3";
			elemento_div.innerHTML = `comprar <b>${localStorage.getItem(`producto${c}`)}</b> de <b>${localStorage.getItem(`cantidad${c}`)}</b> -- <strong class="eliminar">X</strong>`;
			document.querySelector(".insertar").appendChild(elemento_div);
			if(document.querySelector(".insertar .vacio") != null){
				document.querySelector(".insertar .vacio").remove();
			}		
		}
	}

	mensaje(i){
		var elemento_div = document.createElement("div");
		if(i == 0){
			elemento_div.classList = "alert alert-danger mt-3 vacio";
			elemento_div.innerText = "No existe productos a comprar";
		}else{
			elemento_div.classList = "alert alert-info mt-3";
			elemento_div.innerHTML = `comprar <b>${localStorage.getItem(`producto${i}`)}</b> de <b>${localStorage.getItem(`cantidad${i}`)}</b> -- <strong class="eliminar">X</strong>`;
			if(document.querySelector(".insertar .vacio") != null){
				document.querySelector(".insertar .vacio").remove();
			}
		}
		document.querySelector(".insertar").appendChild(elemento_div);

	}

}


function inicio(e){

	if(!localStorage.getItem("contador")){
		localStorage.setItem("contador", 0);
	}

	var objeto = new Registrar_Producto();
	for(var i=0; i<=localStorage.getItem("contador"); i++){
		objeto.mensaje(i);
	}
}

function guardar(){
	var producto = document.getElementById("producto").value;
	var cantidad = document.getElementById("cantidad").value;
	var objeto = new Registrar_Producto( producto,cantidad );
	objeto.insertar();
}

document.body.addEventListener("click", borrar);

function borrar(e){
	if(e.target.classList.contains("eliminar")){
		var obtener = e.target.parentElement.remove();
		var c = localStorage.getItem("contador");
		c = Number(c) - 1;
		localStorage.setItem("contador", c);
	}
}

function limpiar(){
	localStorage.clear();	
	window.location.reload();
}