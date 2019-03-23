class MostrarCard{

	constructor(titulo, precio, imagen, descripcion){
		this.titulo = titulo;
		this.precio = precio;
		this.imagen = imagen;
		this.descripcion = descripcion;
	}

	crearCard(i){
		const card = document.createElement("div");
		card.classList = "col-12 col-sm-6 col-lg-4";
		card.innerHTML = `
		<div class="card m-2" style="width: 270px;">
		<img class="card-img-top" src="img/${this.imagen[i]}"> 
			<div class="card-body">
				<h4 class="card-title">${this.titulo[i]}</h4>
				<p class="card-text">${this.descripcion[i]}</p>
				<button type="button" class="btn btn-success comprar${i} form-control" onclick="comprar_objeto(${i})">Comprar por $<strong id="costo${i}">${this.precio[i]}</strong></button>
			</div>
		</div>	
		`;
		document.querySelector(".insertar").appendChild(card);
	}

}

document.addEventListener("DOMContentLoaded" , inicio);

		var arreglo_imagen = ['parlante.png', 'procesador.png', 'ram.png', 'sonido.png', 'teclado.png'];
		var arreglo_titulo = ['Parlante', 'Procesador', 'Memoria Ram', 'Targeta de Sonido', 'Teclado'];
		var arreglo_descripcion = ['Parlante para ordenador de escritoria de muy buena calidad', 'Acelera tu ordenador con el nuevo procesador de mayor capacidad', 'Ejecuta mas apilcaciones con la ayuda de la nueva y mejorable memoria RAM', 'Descuentos de locura en targetas de sonido, entra y pide el tuyo ya.!!', 'Entra y conoce los diferentes teclados que tenemos para tu ordenador'];
		var precio = ['12', '30', '22', '25', '31'];

function inicio(){
	var objeto = new MostrarCard(arreglo_titulo, precio, arreglo_imagen, arreglo_descripcion);
	for(var i=0; i<=4; i++){
		objeto.crearCard(i);
	}
}

function comprar_objeto(i){
	var carrito = document.getElementById("carrito");
	pasar = parseInt(carrito.innerHTML) + 1;
	carrito.innerHTML = `${pasar}`;
	var comprar = document.querySelector(`.comprar${i}`);
	var costo = document.getElementById(`costo${i}`);
	var obtener_titulo = comprar.parentElement.parentElement.getElementsByTagName('h4')[0].innerText;
	var li = document.createElement(li);
	li.classList = "m-2";
	li.innerHTML = `<strong>${obtener_titulo} - $${costo.innerHTML}</strong><br/>`;
	document.getElementById("lista_carrito").appendChild(li);
}





class Factura extends MostrarCard{
	constructor(titulo, precio){
		super(titulo, precio);
	}

	mostrar_factura(j){
		const modal = document.createElement("div");
		modal.classList = "container";
		modal.innerHTML = `
			<div class="row justify-content-center">	
				<div class="col-10">
					<articule>
						<h6 class="text-center">Descuentos</h6>
						<a href="#" class="btn btn-success form-control">${this.titulo[j]} ahora esta en $${this.precio[j] / 2} Dolares</a>
					</articule>
				</div>	
			</div>	
		`;
		document.querySelector(".insertar_factura").appendChild(modal);
	}

}

var boton_factura = document.querySelector(".boton_factura");
boton_factura.addEventListener("click", crear_factura);

function crear_factura(e){
	e.preventDefault();
	document.querySelector(".insertar").style.display = "none";
	var objeto = new Factura(arreglo_titulo, precio);
	for(var j=0; j<=4; j++){
		objeto.mostrar_factura(j);
	}
}