<!doctype html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/dist/3rd/css-3rd/font-awesome/css/all.css">
    <link rel="stylesheet" href="assets/dist/3rd/css-3rd/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/dist/css/index.css">
    <link rel="stylesheet" href="assets/src/font/RobotoCondensed/stylesheet.css">
    <link rel="icon" href="assets/dist/img/header/icon.png">
    <title>Xbox Home</title>
</head>

<body onload="time() && inProgress()">
    <div class="fundo-escuro-bg"></div>

    <header class="container mt-4">

        <div class="row">
            <div class="col-8 col-md-10 perfil">

                <img src="assets/dist/img/header/perfil.jpg" alt="Imagem de perfil" onclick="menu()">

                <div class="gamertag">
                    <span class="justify-content-center font-weight-bold">svzzin</span><br>
                    <i class="fas fa-trophy text-bottom"></i>
                    <span class="justify-content-center text-bottom">44027</span>
                </div>


            </div>

            <div class="col-4 col-md-2 d-flex justify-content-end align-self-center">

                <i class="fas fa-microphone-slash mt-1" id="microphone"></i>
                <i class="fas fa-battery-full pl-3 mt-1" id="batery"></i>
                <span class="justify-content-end ml-3 font-weight-bold" id="horario">
                    <!-- hora atual sendo mostrada pelo js -->
                </span>

            </div>
        </div>

    </header>

    <section class="container recentes">

        <div class="row">
            <div class="col-12 col-md-3 pr-md-3">

                <a href="https://www.microsoft.com/pt-br/p/ori-and-the-will-of-the-wisps/9n8cd0xzklp4" target="_blank">
                    <div class="card card-principal">

                        <p class="mt-auto descricao">Ori and the Will of the Wisps</p>

                    </div>
                </a>
            </div>

            <div class="col-6 col-md-1 pr-2px align-self-md-end ">
                <a href="https://www.xbox.com/pt-BR/" target="_blank">
                    <div class="card card-secundario">

                        <div class="text-center mt-md-4 mt-sm-2">
                            <i class="fas fa-shopping-bag mt-3"></i>
                        </div>

                        <p class="mt-auto descricao">Microsoft Store</p>

                    </div>
                </a>
            </div>

            <div class="col-6 col-md-1 pl-2px align-self-md-end">
                <div class="card card-secundario box3">

                    <p class="mt-auto descricao">Cyberpunk 2077</p>

                </div>
            </div>

            <div class="col-6 col-md-1 pr-2px align-self-md-end ">
                <a href="https://www.xbox.com/pt-BR/xbox-game-pass" target="_blank">
                    <div class="card card-secundario box4">

                        <p class="mt-auto descricao">Xbox Game Pass</p>

                    </div>
                </a>
            </div>

            <div class="col-6 col-md-1 pl-2px align-self-md-end ">
                <a href="https://www.microsoft.com/pt-br/edge" target="_blank">
                    <div class="card card-secundario edge">

                        <div class="text-center mt-md-4 mt-sm-2">
                            <i class="fab fa-edge-legacy mt-3"></i>
                        </div>

                        <p class="mt-auto descricao">Microsoft Edge</p>

                    </div>
                </a>
            </div>

            <div class="col-6 col-md-1 pr-2px align-self-md-end mt-md-0 mt-2">
                <a href="https://www.microsoft.com/pt-br/p/no-mans-sky/bqvqtl3pch05" target="_blank">
                    <div class="card card-secundario box6">


                        <p class="mt-auto descricao">No Man's Sky</p>

                    </div>
                </a>
            </div>

            <div class="col-6 col-md-1 pl-2px align-self-md-end mt-md-0 mt-2">
                <a href="https://www.microsoft.com/pt-br/p/resident-evil-7-biohazard/9nblggh4spk6" target="_blank">
                    <div class="card card-secundario box7">

                        <p class="mt-auto descricao">RESIDENT EVIL 7 biohazard</p>

                    </div>
                </a>
            </div>

        </div>

        <div class="row mt-md-4 mt-3">

            <div class="col-12 col-md-3 pr-md-3 mb-2">
                <div class="card biblioteca">

                    <div class="text-center mt-3">
                        <i class="fa fa-gamepad"></i> <!-- chess -->
                    </div>

                    <p class="mt-auto ml-2">Meus jogos e apps</p>

                </div>
            </div>

            <div class="col-12 col-md-3 mb-2 atividade-recente pr-2px">
                <div class="card ">

                    <div class="mt-2 mr-3 ml-auto">
                        <img src="assets/dist/img/home/perfil-amigo1.jpg" alt="Imagem de perfil amigo">
                        <img src="assets/dist/img/home/perfil-amigo2.jpg" alt="Imagem de perfil amigo">
                    </div>

                    <p class="mt-auto ml-3 ml-md-2">
                        2 amigos jogando
                        <span class="d-block">EA SPORTS™ FIFA 21</span>
                    </p>
                    <div class="fundo-escuro"></div>

                </div>

            </div>

            <div class="col-12 col-md-3 mb-2 with-gold pr-2px">
                <div class="card ">

                    <div class="mt-1 ml-auto mr-3">
                        <img src="assets/dist/img/home/live-gold.png" alt="Imagem de perfil amigo">
                    </div>

                    <p class="mt-auto ml-3 ml-md-2">
                        Dias para jogar de graça
                    </p>
                    <div class="fundo-escuro"></div>

                </div>

            </div>

            <div class="col-12 col-md-3 anuncio pr-2px">

                <a href="https://www.xbox.com/pt-BR/games/call-of-duty-black-ops-cold-war" target="_blank" rel="noopener noreferrer">
                    <div class="card">

                        <p class="mt-auto ml-3 ml-md-2">
                            <span class="d-block">Já disponível</span>
                            COD: Black Ops Cold War

                        </p>
                        <div class="fundo-escuro"></div>

                    </div>
                </a>

                <div class="float-right">
                    <p>
                        <small>Anúncio</small>
                    </p>
                </div>
            </div>

        </div>

    </section>

    <section class="container pins">

        <div class="row">

            <h2 class="title font-weight-bold col-12">Pins</h2>

            <div class="col-6 col-md-3 col-lg-3 pr-2px">

                <div class="card groups">

                    <i class="text-center fas fa-thumbtack mt-auto"></i>
                    <p class="mt-auto ml-2">Grupos</p>
                </div>

            </div>

            <div class="col-3 col-md-1 col-lg-1 pl-2px pr-2px">

                <a href="https://www.microsoft.com/pt-br/p/cuphead/9njrx71m5x9p" target="_blank">

                    <div class="card pin1">
                        <div class="sub-card">
                            <p class="mt-auto descricao">Cuphead</p>
                        </div>

                    </div>

                </a>

                <a href="https://www.microsoft.com/pt-br/p/state-of-decay-2-juggernaut-edition/9nt4x7p8b9nb"
                    target="_blank">

                    <div class="card pin11 mt-2">
                        <div class="sub-card">
                            <p class="mt-auto descricao">State of Decay 2</p>
                        </div>

                    </div>
                </a>
            </div>

            <div class="col-3 col-md-1 col-lg-1 pl-2px pr-2px d-none d-md-block">
                <a href="https://www.spotify.com/br/" target="_blank">

                    <div class="card pin2">
                        <div class="sub-card">
                            <p class="mt-auto descricao">Spotify</p>
                        </div>

                    </div>

                </a>

                <div class="card mt-2">
                    <div class="sub-card">

                        <div class="text-center mt-3">
                            <i class="fas fa-grip-lines"></i>
                        </div>

                        <p class="mt-auto descricao">One Guide</p>

                    </div>
                </div>

            </div>

            <div class="col-3 col-md-1 col-lg-1 pl-2px d-block d-md-none">
                <a href="https://www.spotify.com/br/" target="_blank">

                    <div class="card pin2">
                        <div class="sub-card">
                            <p class="mt-auto descricao">Spotify</p>
                        </div>

                    </div>

                </a>

                <div class="card mt-2">
                    <div class="sub-card">

                        <div class="text-center mt-3">
                            <i class="fas fa-grip-lines"></i>
                        </div>

                        <p class="mt-auto descricao">One Guide</p>

                    </div>
                </div>

            </div>

            <div class="col-3 col-md-1 col-lg-1 mt-2 mt-md-0 pr-2px">
                <a href="https://www.primevideo.com/?_encoding=UTF8&language=pt_BR" target="_blank">

                    <div class="card pin3">
                        <div class="sub-card">
                            <p class="mt-auto descricao">Prime Video</p>
                        </div>

                    </div>

                </a>

                <a href="https://www.twitch.tv/" target="_blank">

                    <div class="card pin12 mt-2">
                        <div class="sub-card">
                            <p class="mt-auto descricao">Twitch</p>
                        </div>

                    </div>

                </a>

            </div>

            <div class="col-3 col-md-1 col-lg-1 mt-2 mt-md-0 pl-2px pr-2px">

                <a href="https://www.netflix.com/br/" target="_blank">

                    <div class="card pin4">
                        <div class="sub-card">
                            <p class="mt-auto descricao">Netflix</p>
                        </div>

                    </div>

                </a>

                <a href="https://support.xbox.com/pt-BR/" target="_blank">
                    <div class="card mt-2">
                        <div class="sub-card">

                            <div class="text-center mt-3">
                                <i class="fas fa-question"></i>
                            </div>

                            <p class="mt-auto descricao">Ajuda</p>

                        </div>
                    </div>
                </a>


            </div>

            <div class="col-3 col-md-1 col-lg-1 mt-2 mt-md-0 pl-2px pr-2px">

                <a href="https://www.youtube.com/" target="_blank">

                    <div class="card pin5">
                        <div class="sub-card">
                            <p class="mt-auto descricao">Youtube</p>
                        </div>

                    </div>
                </a>

                <a href="https://www.microsoft.com/pt-br/edge" target="_blank">

                    <div class="card edge mt-2">
                        <div class="sub-card">

                            <div class="text-center mt-3">
                                <i class="fab fa-edge-legacy"></i>
                            </div>

                            <p class="mt-auto descricao">Microsoft Edge</p>

                        </div>
                    </div>

                </a>

            </div>

            <div class="col-3 col-md-1 col-lg-1 mt-2 mt-md-0 pr-2px d-none d-md-block">

                <a href="https://www.ea.com/pt-br/ea-play" target="_blank">

                    <div class="card pin6">
                        <div class="sub-card">
                            <p class="mt-auto descricao">EA Play</p>
                        </div>

                    </div>

                </a>

                <a href="https://www.microsoft.com/pt-br/p/quantum-break/9nblggh6h0rv" target="_blank">

                    <div class="card pin10 mt-2">

                        <div class="sub-card">
                            <p class="mt-auto descricao">Quantum Break</p>
                        </div>

                    </div>

                </a>

            </div>

            <div class="col-3 col-md-1 col-lg-1 mt-2 mt-md-0 pl-2px d-block d-md-none">

                <a href="https://www.ea.com/pt-br/ea-play" target="_blank">

                    <div class="card pin6">
                        <div class="sub-card">
                            <p class="mt-auto descricao">EA Play</p>
                        </div>

                    </div>

                </a>

                <a href="https://www.microsoft.com/pt-br/p/quantum-break/9nblggh6h0rv" target="_blank">

                    <div class="card pin10 mt-2">

                        <div class="sub-card">
                            <p class="mt-auto descricao">Quantum Break</p>
                        </div>

                    </div>

                </a>

            </div>

            <div class="col-md-1 col-lg-1 mt-2 pr-2px d-none d-md-block"></div>
            <div class="col-md-1 col-lg-1 mt-2 pr-2px d-none d-md-block"></div>

            <div class="col-3 col-md-1 col-lg-1 mt-2 pr-2px">

                <a href="https://www.telecineplay.com.br/" target="_blank">

                    <div class="card pin7">
                        <div class="sub-card">
                            <p class="mt-auto descricao">Telecine Play</p>
                        </div>

                    </div>

                </a>

            </div>

            <div class="col-3 col-md-1 col-lg-1 mt-2 pl-2px pr-2px">

                <a href="https://www.facebook.com/watch/" target="_blank">

                    <div class="card pin8">
                        <div class="sub-card">
                            <p class="mt-auto descricao">Facebook Watch</p>
                        </div>

                    </div>

                </a>

            </div>

            <div class="col-3 col-md-1 col-lg-1 mt-2  pl-2px pr-2px">

                <div class="card">
                    <div class="sub-card">

                        <div class="text-center mt-3">
                            <i class="fas fa-photo-video"></i>
                        </div>

                        <p class="mt-auto descricao">Media Player</p>

                    </div>

                </div>

            </div>

            <!-- <div class="col-3 col-md-1 col-lg-1 mt-2 mt-lg-0 pl-2px pr-2px d-none d-md-block d-lg-none">

                <a href="https://www.microsoft.com/pt-br/edge" target="_blank">

                    <div class="card edge">
                        <div class="sub-card">

                            <div class="text-center mt-3">
                                <i class="fab fa-edge-legacy"></i>
                            </div>

                            <p class="mt-auto descricao">Microsoft Edge</p>

                        </div>
                    </div>

                </a>

            </div>


            <div class="col-3 col-md-1 col-lg-1 mt-2 mt-lg-0 pr-2px d-none d-md-block d-lg-none">

                <a href="https://www.microsoft.com/pt-br/p/quantum-break/9nblggh6h0rv" target="_blank">

                    <div class="card pin10">

                        <div class="sub-card">
                            <p class="mt-auto descricao">Quantum Break</p>
                        </div>

                    </div>

                </a>


            </div> -->


        </div>



    </section>

    <section class="container store">

        <div class="row">

            <h2 class="title font-weight-bold col-12">Store</h2>

            <div class="col-12 col-md-3">
                <a href="https://www.xbox.com/pt-BR/" target="_blank">
                    <div class="card card-store">

                        <i class="text-center fas fa-shopping-bag mt-auto"></i>
                        <p class="mt-auto ml-2">Store</p>

                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 mt-2 mt-md-0">

                <a href="https://www.microsoft.com/pt-br/p/fortnite/bt5p2x999vh2" target="_blank">

                    <div class="card tendencia1">

                        <p class="mt-auto ml-2">
                            Fortnite
                            <span class="d-block">Jogue hoje</span>
                        </p>

                        <div class="fundo-escuro"></div>

                    </div>

                </a>

            </div>

            <div class="col-12 col-md-3 mt-4 mt-md-0 pr-2px d-none d-md-block">

                <a href="https://www.microsoft.com/pt-br/p/watch-dogs-legion/c1wrx8zd77m9" target="_blank">
                    <div class="card tendencia2">

                        <p class="mt-auto ml-2">
                            Watch Dogs: Legion
                        </p>

                        <div class="fundo-escuro"></div>

                    </div>
                </a>

                <a href="https://www.microsoft.com/pt-br/p/alien-isolation/c1h9v6slk2k5" target="_blank">

                    <div class="card tendencia3 mt-1">

                        <p class="mt-auto ml-2">
                            Alien Isolation

                        </p>

                        <div class="fundo-escuro"></div>

                    </div>
                </a>

            </div>

            <div class="col-6 mt-2 pr-2px d-block d-md-none">

                <a href="https://www.microsoft.com/pt-br/p/watch-dogs-legion/c1wrx8zd77m9" target="_blank">
                    <div class="card tendencia2">

                        <p class="mt-auto ml-2">
                            Watch Dogs: Legion
                        </p>

                        <div class="fundo-escuro"></div>

                    </div>
                </a>

            </div>

            <div class="col-6 mt-2 pl-2px d-block d-md-none">

                <a href="https://www.microsoft.com/pt-br/p/alien-isolation/c1h9v6slk2k5" target="_blank">

                    <div class="card tendencia3">

                        <p class="mt-auto ml-2">
                            Alien Isolation

                        </p>

                        <div class="fundo-escuro"></div>

                    </div>
                </a>

            </div>

        </div>

        <div class="row mt-md-5 mt-1">

            <div class="col-md-3"></div>

            <div class="col-6 col-md-3 pr-2px text-md-left">

                <div class="card mt-1">
                    <div class="sub-card">

                        <p>
                            <i class="fas fa-newspaper"></i>
                            Novos jogos
                        </p>

                    </div>
                </div>

                <div class="card mt-1">
                    <div class="sub-card">

                        <p>
                            <i class="fas fa-calendar-alt"></i>
                            Em breve
                        </p>

                    </div>
                </div>

                <div class="card mt-1 d-md-none d-block">
                    <div class="sub-card">

                        <p>
                            <i class="far fa-gem"></i>
                            Especiais Xbox
                        </p>

                    </div>
                </div>

            </div>

            <div class="col-6 col-md-3 pl-2px">

                <div class="card mt-1">
                    <div class="sub-card">
                        <p>
                            <i class="fas fa-chart-line"></i>
                            Populares pagos
                        </p>
                    </div>
                </div>

                <div class="card mt-1">
                    <div class="sub-card">

                        <p>
                            <i class="fas fa-chart-line"></i>
                            Populares gratuitos
                        </p>

                    </div>
                </div>

                <div class="card mt-1 d-md-none d-block">
                    <div class="sub-card">

                        <p>
                            <i class="fas fa-search"></i>
                            Buscar
                        </p>

                    </div>
                </div>

            </div>

            <div class="col-6 col-md-3 pr-2px d-none d-md-block">

                <div class="card mt-1">
                    <div class="sub-card">

                        <p>
                            <i class="far fa-gem"></i>
                            Especiais Xbox
                        </p>

                    </div>
                </div>

                <div class="card mt-1">
                    <div class="sub-card">

                        <p>
                            <i class="fas fa-search"></i>
                            Buscar
                        </p>

                    </div>
                </div>

            </div>

        </div>


    </section>

    <section class="container gamepass">

        <div class="row">

            <h2 class="title font-weight-bold col-12">Game Pass</h2>

            <div class="col-12 col-md-3">

                <a href="https://www.microsoft.com/pt-br/p/xbox-game-pass-ultimate/cfq7ttc0khs0" target="_blank">
                    <div class="card card-gamepass">

                        <p class="mt-auto ml-2">Game Pass</p>

                    </div>
                </a>

            </div>

            <div class="col-12 col-md-6 mt-2 mt-md-0">

                <a href="https://www.microsoft.com/pt-br/p/world-war-z/9n015dfdmvk6" target="_blank">

                    <div class="card banner1">

                        <p class="mt-auto ml-2">
                            World War Z
                            <span class="d-block">Sobreviver a enormes hordas de zumbis</span>
                        </p>

                        <div class="fundo-escuro"></div>

                    </div>

                </a>

            </div>

            <div class="col-md-3 mt-4 mt-md-0 pr-2px d-none d-md-block">

                <a href="https://www.microsoft.com/pt-br/p/hellblade-senuas-sacrifice/c4z7qm8fsxm2" target="_blank">
                    <div class="card banner2">

                        <p class="mt-auto ml-2 d-block d-md-none d-lg-block">
                            Hellblade: Senua's Sacrifice
                        </p>

                        <p class="mt-auto ml-2 d-none d-md-block d-lg-none">
                            Hellblade:<br>Senua's Sacrifice
                        </p>

                        <div class="fundo-escuro"></div>

                    </div>
                </a>

                <a href="https://www.microsoft.com/pt-br/p/astroneer/9nblggh43kzb" target="_blank">

                    <div class="card banner3 mt-1">

                        <p class="mt-auto ml-2">
                            Astroneer

                        </p>

                        <div class="fundo-escuro"></div>

                    </div>
                </a>

            </div>

            <div class="col-4 mt-2 pr-2px d-block d-md-none">

                <a href="https://www.microsoft.com/pt-br/p/hellblade-senuas-sacrifice/c4z7qm8fsxm2" target="_blank">
                    <div class="card banner2">

                        <p class="mt-auto ml-2">
                            Hellblade: Senua's Sacrifice
                        </p>

                        <div class="fundo-escuro"></div>

                    </div>
                </a>

            </div>

            <div class="col-4 mt-2 pl-2px pr-2px d-block d-md-none">

                <a href="https://www.microsoft.com/pt-br/p/astroneer/9nblggh43kzb" target="_blank">

                    <div class="card banner3">

                        <p class="mt-auto ml-2">
                            Astroneer

                        </p>

                        <div class="fundo-escuro"></div>

                    </div>
                </a>

            </div>



            <div class="col-4 pl-2px mt-1 d-md-none d-block">

                <a href="https://www.microsoft.com/pt-br/p/a-plague-tale-innocence/bq2nnlqps8rs" target="_blank"></a>

                <div class="card mt-1 banner5">

                    <p class="mt-auto ml-2">
                        A Plague Tale: Innocence
                    </p>

                    <div class="fundo-escuro"></div>
                </div>
                </a>

            </div>



        </div>

        <div class="row mt-md-5 mt-1">

            <div class="col-md-3"></div>

            <div class="col-md-3 pr-2px d-md-block d-none">

                <div class="card mt-1">
                    <div class="sub-card">

                        <p>
                            <i class="far fa-clock pr-1"></i>
                            Recém-adicionados
                        </p>

                    </div>
                </div>

                <div class="card mt-1">
                    <div class="sub-card">

                        <p>
                            <i class="fas fa-gamepad pr-1"></i>
                            Todos os jogos
                        </p>

                    </div>
                </div>

            </div>

            <div class="col-4 col-md-3 pr-2px text-center text-md-left d-none d-md-block">

                <a href="https://www.microsoft.com/pt-br/p/a-plague-tale-innocence/bq2nnlqps8rs" target="_blank">

                    <div class="card mt-1 banner5">

                        <p class="mt-auto ml-2">
                            A Plague Tale: Innocence
                        </p>

                        <div class="fundo-escuro"></div>
                    </div>

                </a>

            </div>

            <div class="col-12 col-md-3 pr-2px d-none d-md-block">

                <a href="https://www.microsoft.com/pt-br/p/tom-clancys-rainbow-six-siege-deluxe-edition/9p30k2nxwh82"
                    target="_blank">
                    <div class="card mt-1 banner4">

                        <p class="mt-auto ml-2">
                            Rainbow Six: Siege
                        </p>

                        <div class="fundo-escuro"></div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-3d-block d-md-none">

                <a href="https://www.microsoft.com/pt-br/p/tom-clancys-rainbow-six-siege-deluxe-edition/9p30k2nxwh82">
                    <div class="card mt-1 banner4">

                        <p class="mt-auto ml-2">
                            Rainbow Six: Siege
                        </p>

                        <div class="fundo-escuro"></div>
                    </div>
                </a>
            </div>

            <div class="col-6 pr-2px d-block d-md-none">

                <div class="card mt-1">
                    <div class="sub-card ">

                        <p>
                            <i class="far fa-clock"></i>
                            Recém-adicionados
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-6 pl-2px d-block d-md-none">

                <div class="card mt-1">
                    <div class="sub-card ">

                        <p>
                            <i class="fas fa-gamepad"></i>
                            Todos os jogos
                        </p>

                    </div>
                </div>
            </div>
        </div>

        </div>


    </section>

    <footer class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <p>Toda marca presente é uma propriedade pertencente à terceiros.*</p>

                    <p>Todas as marcas presentes foram usadas somente em caráter expositivo.</p>

                    <p>Todo conteúdo aqui terceirizado é licenciado através de creative commons e totalmente sem fins
                        lucrativos.</p>
                    
                    <p>*As marcas Xbox, Ori and the Will of the Wisps, Cyberpunk 2077, Xbox Game Pass, No Man's Sky, Resident Evil, FIFA, Injustice, Call of Duty, Cuphead, Spotify, Prime Video, Netflix, Youtube, EA Play, State of Decay, Twitch, EDGE, Quantum Break, Telecine Play, Facebook Watch, Fortnite, Watch Dogs, Alien Isolation, World War Z, Hellblade, Astroneer, Rainbow Six, A Plague Tale: Innocence e outras são propriedades intelectuais que pertencem à terceiros.</p>

                    <p id="base">**baseado na OS Version 10.0.19041.3503 (Agosto, 2020)</p>



                    <p class="d-flex pt-4">

                        11/2021

                        <span class="ml-auto">v1.0.2</span>

                        <span class="ml-auto">

                            <a href="http://github.com/saviodossantos" target="_blank" class="pr-2">

                                <i class="fab fa-github"></i>

                            </a>

                            <a href="http://linkedin.com/in/saviodossantos" target="_blank">

                                <i class="fab fa-linkedin"></i>

                            </a>
                        </span>
                    </p>

                </div>
            </div>

        </div>
    </footer>

</body>

<script src="assets/src/js/main.js"></script>

</html>