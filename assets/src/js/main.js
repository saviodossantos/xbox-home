//horário do sistema
function time() {

    let horario = new Date();

    hora = horario.getHours();
    minutos = horario.getMinutes();

    if (hora.toString().length == 1) hora = '0' + hora;
    if (minutos.toString().length == 1) minutos = '0' + minutos;

    document.getElementById('horario').innerHTML = hora + ":" + minutos;

    setTimeout('time()', 1000);

}

function menu() {
    alert("🚨 Você descobriu um recurso que (ainda) não está disponível!\n"
        + "Parabéns! 🥳🥳\n\n"
        + "Em breve:\n\n"
        + "➡ Seção configurações para personalizar opacidade e cor dos blocos;\n"
        + "➡ Seção Pessoas;\n"
        + "➡ Seção Perfil & Sistema;\n"
        + "➡ Visualizar data e hora."
    )
}

alert("🚨 Atenção!🚨\n\n 🚧 🚜 Projeto ainda em desenvolvimento 🚜 🚧")

