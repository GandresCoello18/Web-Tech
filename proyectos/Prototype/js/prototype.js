function Datos(modelo, producto, pago){
	this.modelo = modelo;
	this.producto = producto;
	this.pago = pago;
}

var boton_cotizar = document.querySelector(".boton_cotizar");
boton_cotizar.addEventListener("click",  calcular);

function calcular(e){
	e.preventDefault();
	var modelo = document.getElementById("modelo").value;	
	var producto = document.getElementById("producto").value;
	var pago = document.getElementById("pago").value;

	if(modelo == 'Seleccionar' || producto == 'Seleccionar' || pago == 'Seleccionar'){
		alert("campos vacios, vuelva a intentarlo");
	}else{
		var datos = new Datos(modelo, producto, pago);
		datos.acceder();
	}
}

Datos.prototype.acceder = function(){
	var precio_base = 50;
	var cantidad;
	var iva = 1.34;
	var intereses = 1.05;
	switch(this.modelo){
		case 'j1_mini':
		cantidad = precio_base + 40;
		break
		case 'j2_normal':
		cantidad = precio_base + 60;
		break
		case 'j2_prime':
		cantidad = precio_base + 70;
		break
		case 'j5_normal':
		cantidad = precio_base + 110;
		break
		case 'j5-prime':
		cantidad = precio_base + 140;
		break
		case 'j5_pro':
		cantidad = precio_base + 170;
		break
	}

	switch(this.producto){
		case'si':
		cantidad = cantidad * iva;
		break
		case'no':
		cantidad = cantidad * iva;
		cantidad = cantidad / 2;
		break
	}

	switch(this.pago){
		case 'efectivo':
		cantidad = cantidad / 1.10;
		mensaje('efectivo');
		break
		case 'credito':
		cantidad = cantidad / 12;
		cantidad = cantidad * intereses;
		mensaje('credito');
		break
	}

	function mensaje(tipo) {
			var nuevo_alert = document.createElement("div");
			nuevo_alert.classList = "alert alert-info";
		if(tipo == 'efectivo'){
nuevo_alert.innerText = `El total a pagar por tu producto es $${parseFloat(cantidad)} Dolares`;
		}else{
nuevo_alert.innerText = `El total a pagar por tu producto es $${parseFloat(cantidad)} Dolares durante 12 meses`;
		}
		document.querySelector(".insertar").appendChild(nuevo_alert);
	}
}	