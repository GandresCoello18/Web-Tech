var traer = document.querySelector(".traer");
traer.addEventListener("click", informacion);

function informacion(){
	let xhr = new XMLHttpRequest();

	xhr.open('GET', 'posts.json', true);

	xhr.onload = function(){
		if(this.status === 200){
			let respuesta = JSON.parse(this.responseText);
			
			for(var i=0; i<=respuesta.length; i++){
				let nuevo = document.createElement("div");
				nuevo.classList = "alert alert-info";
				nuevo.innerHTML = `
				<h5 class="text-center">${respuesta[i].title}</h5>
				<p class="text-center p-2">${respuesta[i].body}</p>
				`;			
			document.querySelector(".insertar").appendChild(nuevo);	
			}
		}
	}

	xhr.send();
}