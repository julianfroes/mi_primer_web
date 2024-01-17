
function dirInicio(){
    location.href = "pdogos.html";
}
function dirPedido(){
    location.href = "Pedidos.html";
}
function dirPedido2(){
    location.href = "Pedidos2.php";
}
function dirPromociones(){
    location.href = "Promociones.html";
    
}
function dirContacto(){
    location.href = "contacto.html";
}
function dirRegistro(){
    location.href = "Registro.html";
}
/* funcion para tener fecha y hora*/ 
function horafecha(){
    var fecha= new Date();
    document.write(fecha);

    console.log(fecha.getHours());
    console.log(fecha.getMinutes());
    console.log(fecha.getSeconds());

    var semana = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado']
    console.log(fecha.getDay());
    console.log(fecha.getDate());
    console.log(fecha.getMonth());
    console.log(fecha.getFullYear());
}
