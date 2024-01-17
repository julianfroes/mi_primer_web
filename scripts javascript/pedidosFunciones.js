function sumar(costo){
    var costoTotal=document.getElementById('total');
    if(costoTotal.textContent==""){
        costoTotal.textContent=costo;
    }
    else{
        costoTotal.textContent=parseInt(costoTotal.textContent)+costo;
    }
    

}