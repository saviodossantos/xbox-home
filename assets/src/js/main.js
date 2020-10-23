//horário do sistema

function time(){

    let horario = new Date();

    hora = horario.getHours();
    minutos = horario.getMinutes();

    if(hora.toString().length == 1) hora = '0' + hora;
    if(minutos.toString().length == 1) minutos = '0' + minutos;

    document.getElementById('horaAtual').innerHTML = hora + ":" + minutos;

    setTimeout('time()',1000);
    
}