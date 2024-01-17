(function(){
    var actualizrHora= function(){
        var fecha = new Date(),
        horas = fecha.getHours(),
        ampm,
        minutos = fecha.getMinutes(),
        segundos = fecha.getSeconds(),
        diaSemana = fecha.getDay(),
        dia = fecha.getDate(),
        mes = fecha.getMonth(),
        year = fecha.getFullYear();

    var pHoras = document.getElementById('horas'),
        pAMPM = document.getElementById('ampm'),
        pMinutos = document.getElementById('minutos'),
        pSegundos = document.getElementById('segundos'),
        pDiaSemana = document.getElementById('diaSemana'),
        pDia = document.getElementById('dia'),
        pMes = document.getElementById('mes'),
        pYear = document.getElementById('year');

    var semana = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado']
    pDiaSemana.textContent = semana[diaSemana];
    pDia.textContent = dia;
    
    var meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre']
    pMes.textContent = meses[mes];
    pYear.textContent = year;

    if(horas >=12){
        horas = horas - 12;
        ampm = 'PM';
    }else{
        ampm = 'AM';
    }
    if (horas ==0) {
        horas =12;
    };
    
    pHoras.textContent = horas;
    pAMPM.textContent = ampm;
    if(minutos.textContent < 10){minutos = "0"+minutos};
    if(segundos.textContent < 10){segundos = "0"+segundos};
    pMinutos.textContent = minutos;
    pSegundos.textContent = segundos;


    };
    var actualizarimagen= function(){
        var fecha = new Date(),
    dia = fecha.getDate();
    var imagen;
    var descripcion, noferta,poferta;
    switch (dia) {
        case 2:
            imagen ="imagenes/promo.PNG";
            noferta="Martes de Hamburguesas 3x2";
            descripcion="En la compra de 2 hamburguesas de cualquier tipo llevate una tercera de regalo";
            poferta="";
            document.getElementById('nombreOferta').textContent=noferta;
            document.getElementById('precioOferta').textContent=poferta;
            document.getElementById('descripcionOferta').textContent=descripcion;
            document.getElementById('promoimagenrotativa').src=imagen;
            break;
        case 3:
            imagen ="imagenes/dogopapaspromo.jfif";
            noferta="Papas en tu dogo";
            descripcion="Añadele papas fritas a tu dogo por solo 15 pesitos";
            poferta="15 MXN";
            document.getElementById('nombreOferta').textContent=noferta;
            document.getElementById('precioOferta').textContent=poferta;
            document.getElementById('descripcionOferta').textContent=descripcion;
            document.getElementById('promoimagenrotativa').src=imagen;
            break;
        case 4:
            imagen ="imagenes/bonelesoferta.jpg";
            document.getElementById('promoimagenrotativa').src=imagen;
            break;

    
        default:
            imagen ="imagenes/imagen abajo.png";
            noferta="No hay ofertas por hoy";
            descripcion="Lo esperamos en nuestras distintas sucursales";
            console.log("c paput");
            poferta="";
            document.getElementById('nombreOferta').textContent=noferta;
            document.getElementById('precioOferta').textContent=poferta;
            document.getElementById('descripcionOferta').textContent=descripcion;
            document.getElementById('promoimagenrotativa').src=imagen;
            break;
            
    }

    };   
    actualizarimagen();
    actualizrHora();
    var intervalo = setInterval(actualizrHora, 1000)
    

}

)
(function(){
    
})