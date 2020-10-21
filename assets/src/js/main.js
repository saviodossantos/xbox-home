//horário do sistema

function time(){

    horario = new Date();

    hora = horario.getHours();
    minutos = horario.getMinutes();

    document.getElementById('horaAtual').innerHTML = hora + ":" + minutos;

    setTimeout('time()',500);
    
}