//horário do sistema

function time(){

    let horario = new Date();

    hora = horario.getHours();
    minutos = horario.getMinutes();

    if(hora.toString().length == 1) hora = '0' + hora;
    if(minutos.toString().length == 1) minutos = '0' + minutos;

    document.getElementById('horario').innerHTML = hora + ":" + minutos;

    setTimeout('time()',1000);
    
}

function menu(){
    alert("🚨 Você descobriu um recurso que (ainda) não está disponível!\n" + "Parabéns! 🥳🥳\n\n" + "➡ Em breve, ao clicar aqui, será capaz personalizar o conteúdo da home, como opacidade e cor dos blocos, sendo o mais fiel possível ao sistema.")
}