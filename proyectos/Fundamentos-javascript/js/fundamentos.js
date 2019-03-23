console.log("se imprime en la consola");

var nombre = "mi nombre";

var nombre = ["andres", "roberto", "coello", "goyes"];

if(nombre[1] == "roberto"){
	console.log("si es verdadero");
}else{
	console.log("no es verdadero");
}

for(var i=0; i<=10; i++){
	console.log("la variable i esta en "+ i);
}

var x=1;
while(x < 5){
	console.log("soy un ciclo "+ x);
	x++;
}

function saludar(valor){
	console.log("hola como estas " + valor);
}

saludar("andres");

//alert("soy una ventana de alerta");

//var digita = prompt("digita cualquier valor");

var titulo = document.getElementById('titulo');

var parrafo = document.querySelector(".parrafo");

//console.log(parrafo.innerHTML = "soy el texto desde la clase");

function ejecutar(nombre) {
	console.log("escuchando desde la propiedad onclick "+ nombre);
}