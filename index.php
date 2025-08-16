<?php 
    include './shared/shared.php';
    include './shared/head.php';
    include './shared/Lps.php';
?>
<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Descrição da pagina-->
        <meta name="description" content="Pagina Principal / Redirecionamento">
    <!--Descrição da pagina-->
    <!--Titulo da pagina-->
        <title>VmBrasil - Proteção Veicular</title>
    <!--Titulo da pagina-->
    <!--Css/js principais-->
        <?php echo $headcss ?>
    <!--Css/js principais-->
    <!--Api-->
        <!--boxicons-->
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!--boxicons-->
    <!--Api-->    
</head>
<body>
    <!--Container principal das paginas estaticas-->
        <section id="Sessaoapresentacao"  style="background: url(./img/banner-principal.webp); background-size: cover">
            <!--Header Primario-->
                <?php echo $headerprincial ?>
            <!--Header Primario-->
            <!--Header Secundario-->
                <?php echo $headersecundario ?>
            <!--Header Primario-->
            <!--Apresentação-->
                <section style="padding: 5rem 0px 5rem 0px;" class="container-md d-flex justify-content-between" id="ContainerApresentacao">
                    <!--Estrutura texto-->
                        <article id="Mobileprimeira" class="d-flex flex-column text-white">
                            <!--Titulo-->
                                <span style="color: var(--amarelo-vm);">
                                    <h1 id="w-100" style="font-weight: 750;">Você mais que protegido!</h1>
                                </span>
                            <!--Titulo-->
                            <br>
                            <!--Texto-->
                                <p id="w-100" class="w-50">Garanta agora proteção total com a <strong>VM Brasil</strong> — proteção imediata, benefícios reais e vantagens exclusivas!</p>
                            <!--Texto-->
                            <br>
                            <!--Btn Principal-->
                                <span>
                                    <button type="button" style="font-weight: 700;" id="BtnContato" class="btn btn-dark">Contato</button>
                                </span>
                            <!--Btn Principal-->
                            <!--Arrow-->
                                <span id="Arrow" style="width: 20%;" class="d-flex justify-content-center p-3">
                                    <i style="font-size: 3.5rem; font-weight: 900;" class='bx bx-chevrons-down'></i>
                                </span>
                            <!--Arrow-->
                        </article>
                    <!--Estrutura texto-->
                </section>
            <!--Apresentação-->
        </section>
    <!--Container principal das paginas estaticas-->    
    <!--Conteudo Principal-->
        <main>
            <!--Soluções-->
                <section id="padding" class="p-5">
                    <article class="container-md d-flex justify-content-evenly align-items-center">
                        <!--Texto--> 
                            <span id="SessaoTexto" class="w-50">
                                <!--Titulo-->
                                    <h4 id="w-100">Nossa Solução</h4>
                                    <h2 id="w-100" style="color: var(--azul-vm); font-weight: 750;">PROTEÇÃO COMPLETA PARA SEU VEÍCULO, SEM COMPLICAÇÃO.</h2>
                                <!--Titulo-->
                                <br>
                                <!--Img-->
                                    <img class="imgmobile w-50" src="./img/home-nossasolucao.webp" alt="Imagem 01">
                                <!--Img-->
                                <br class="brmobile">
                                <!--Legenda-->
                                    <span id="w-100">
                                        <p id="w-100">Se preoculpe com outras coisas, seu bem está protegido em caso de roubo, incêndio, perda total, com pagamento em tempo recorde, 100% tabela Fipe. Nosso time é formado por consultores preparados e comprometidos, prontos para oferecer a melhor orientação e atendimento do primeiro contato.</p>
                                    </span>
                                <!--Legenda-->
                                <br>
                                <button class="Btn01">Contato</button>
                            </span>    
                        <!--Texto-->
                        <!--Img-->
                            <img class="imgdesktop w-50" id="Img" src="./img/home-nossasolucao.webp" alt="Imagem 01">
                        <!--Img-->
                    </article>
                </section>
            <!--Soluções-->
            <!--Serviços-->
                <section id="padding" class="p-3">
                    <article class="container-md">
                        <!--Texto-->
                        <div>
                            <span style="color: var(--roxo-vendex);" class="d-flex flex-column align-items-center text-center">
                                <!--Titulo-->
                                    <h4 >Nossos Serviços</h4>
                                    <h3 id="w-100" class="w-75" style="color: var(--azul-vm); font-weight: 750;">ESCOLHA O PLANO CERTO E VEJA OS RESULTADOS ACONTECEREM.</h3>
                                <!--Titulo-->
                                <!--Texto-->
                                    <span class="d-flex justify-content-center">
                                        <p id="w-100" class="w-75">Com opções pensadas para diferentes necessidades, nossos planos combinam tecnologia de ponta, estratégia personalizada e foco total em performance.</p>
                                    </span>
                                <!--Texto-->
                            </span>
                        </div>
                        <!--Texto-->
                        <!--Cards-->
                            <div id="SessaoCards" class="d-flex justify-content-center container-md p-4">
                                <!--Markplaces-->
                                    <?php echo $markplaces ?>
                                <!--Markplaces-->
                                <!--Consultoria-->
                                    <?php echo $consuultoria ?>
                                <!--Consultoria-->
                                <!--Ads-->
                                    <?php echo $ads ?>
                                <!--Ads-->   
                            </div>
                            <br class="brmobile">
                            <!-- Carrossel de Cards -->
                                <div id="carouselCards" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                                <div class="carousel-inner">
                                    <!-- Primeira Página de Cards -->
                                    <div class="carousel-item active">
                                    <div class="d-flex justify-content-center flex-wrap gap-3">
                                        <?php echo $markplaces; ?>
                                    </div>
                                    </div>

                                    <!-- Segunda Página de Cards -->
                                    <div class="carousel-item">
                                    <div class="d-flex justify-content-center flex-wrap gap-3">
                                        <?php echo $consuultoria; ?>
                                    </div>
                                    </div>

                                    <!-- Terceira Página de Cards -->
                                    <div class="carousel-item">
                                    <div class="d-flex justify-content-center flex-wrap gap-3">
                                        <?php echo $ads; ?>
                                    </div>
                                    </div>
                                </div>

                                <!-- Controles de Navegação -->
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselCards" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Anterior</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselCards" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Próximo</span>
                                </button>
                                </div>
                        <!--cards-->
                    </article>
                </section>
            <!--Serviços-->
            <!--Parceiros-->
                <section>
                    <article class="container">
                        <div>
                            <span class="text-center">
                                <h3 style="color: var(--primary-color);">Cobertura Nacional</h3>
                                <h4 style="color: var(--azul-vm); font-weight: 750;">Aqui na <strong>VM BRASIL</strong> você tem cobertura em casos de:</h4>
                            </span>
                            <br>
                            <section class="d-flex justify-content-center align-items-center flex-wrap">
                                    <div class="carousel-container">
                                        <div class="carousel-track" id="carousel-track">
                                        <div class="beneficio-item active">
                                            <div class="card50 gap-1 d-flex justify-content-center align-items-center w-100">
                                                <img style="width: 30% !important;" src="./img/icon/roubo-de-pessoas.svg" alt="" srcset="">
                                                <br><br>
                                                <p style="margin: 0px !important;">Roubo e
                                                <br> Furto</p>
                                            </div>
                                        </div>
                                        <div class="beneficio-item active">
                                            <div class="card50 gap-1 d-flex justify-content-center align-items-center w-100">
                                                <img style="width: 30% !important;" src="./img/icon/incendio.svg" alt="" srcset="">
                                                <br><br>
                                                <p style="margin: 0px !important;">Incêndio
                                                <br>Por  Colisão</p>
                                            </div>
                                        </div>
                                        <div class="beneficio-item active">
                                            <div class="card50 gap-1 d-flex justify-content-center align-items-center  w-100">
                                                <img style="width: 30% !important;" src="./img/icon/acidente.svg" alt="" srcset="">
                                                <br><br>
                                                <p style="margin: 0px !important;">acidente
                                            </div>
                                        </div>
                                        <div class="beneficio-item active">
                                            <div class="card50 gap-1 d-flex justify-content-center align-items-center w-100">
                                                <img style="width: 30% !important;" src="./img/icon/colisao.svg" alt="" srcset="">
                                                <br><br>
                                                <p style="margin: 0px !important;">Colisão</p>
                                            </div>
                                        </div>
                                        <div class="beneficio-item active">
                                            <div class="card50 gap-1 d-flex justify-content-center align-items-center w-100">
                                                <img style="width: 30% !important;" src="./img/icon/carro-capotado.svg" alt="" srcset="">
                                                <br><br>
                                                <p style="margin: 0px !important;">Perda
                                                <br> Total</p>
                                            </div>
                                        </div>
                                        <div class="beneficio-item active">
                                            <div class="card50 gap-1 d-flex justify-content-center align-items-center w-100">
                                                <img style="width: 30% !important;" src="./img/icon/BRASIL.svg" alt="" srcset="">
                                                <br><br>
                                                <p style="margin: 0px !important;">Cobertura
                                                <br> Nacional</p>
                                            </div>
                                        </div>
                                        <div class="beneficio-item active">
                                            <div class="card50 gap-1 d-flex justify-content-center align-items-center w-100">
                                                <img style="width: 30% !important;" src="./img/icon/carro-capotado-1-1.svg" alt="" srcset="">
                                                <br><br>
                                                <p style="margin: 0px !important;">Capotamento</p>
                                            </div>
                                        </div>
                                        <div class="beneficio-item active">
                                            <div class="card50 gap-1 d-flex justify-content-center align-items-center w-100">
                                                <img style="width: 30% !important;" src="./img/icon/24H.svg" alt="" srcset="">
                                                <br><br>
                                                <p style="margin: 0px !important;">Assistência
                                                <br>24 Horas</p>
                                            </div>
                                        </div>
                                        <div class="beneficio-item active">
                                            <div class="card50 gap-1 d-flex justify-content-center align-items-center w-100">
                                                <img style="width: 30% !important;" src="./img/icon/GUINCHO.svg" alt="" srcset="">
                                                <br><br>
                                                <p style="margin: 0px !important;">Guincho para
                                                <br>Acidente</p>
                                            </div>
                                        </div>
                                        <div class="beneficio-item active">
                                            <div class="card50 gap-1 d-flex justify-content-center align-items-center w-100">
                                                <img style="width: 30% !important;" src="./img/icon/parabrisa.svg" alt="" srcset="">
                                                <br><br>
                                                <p style="margin: 0px !important;">Vidros,
                                                <br>Farois e
                                                <br>Lanternas</p>
                                            </div>
                                        </div>
                                        <div class="beneficio-item active">
                                            <div class="card50 gap-1 d-flex justify-content-center align-items-center w-100">
                                                <img style="width: 30% !important;" src="./img/icon/PRESENTE-AZUL.svg" alt="" srcset="">
                                                <br><br>
                                                <p style="margin: 0px !important;">Danos a
                                                <br>Terceiros</p>
                                            </div>
                                        </div>
                                        <div class="beneficio-item active">
                                            <div class="card50 gap-1 d-flex justify-content-center align-items-center w-100">
                                                <img style="width: 30% !important;" src="./img/icon/predio.svg" alt="" srcset="">
                                                <br><br>
                                                <p style="margin: 0px !important;">Aux.
                                                <br>Hospedagem</p>
                                            </div>
                                        </div>
                                        <div class="beneficio-item active">
                                            <div class="card50 gap-1 d-flex justify-content-center align-items-center w-100">
                                                <img style="width: 30% !important;" src="./img/icon/taxi.svg" alt="" srcset="">
                                                <br><br>
                                                <p style="margin: 0px !important;">Táxi
                                                <br>Emergencial</p>
                                            </div>
                                        </div>
                                        <div class="beneficio-item active">
                                            <div class="card50 gap-1 d-flex justify-content-center align-items-center w-100">
                                                <img style="width: 30% !important;" src="./img/icon/CHAVEIRO.svg" alt="" srcset="">
                                                <br><br>
                                                <p style="margin: 0px !important;">Auxílio
                                                <br>Chaveiro</p>
                                            </div>
                                        </div>
                                        <div class="beneficio-item active">
                                            <div class="card50 gap-1 d-flex justify-content-center align-items-center w-100">
                                                <img style="width: 30% !important;" src="./img/icon/carro.svg" alt="" srcset="">
                                                <br><br>
                                                <p style="margin: 0px !important;">Carro
                                                <br>Reserva</p>
                                            </div>
                                        </div>
                                        <div class="beneficio-item active">
                                            <div class="card50 gap-1 d-flex justify-content-center align-items-center w-100">
                                                <img style="width: 30% !important;" src="./img/icon/PRESENTE-AZUL.svg" alt="" srcset="">
                                                <br><br>
                                                <p style="margin: 0px !important;">Aux.Pneu
                                                <br>Furado</p>
                                            </div>
                                        </div>
                                        <div class="beneficio-item active">
                                            <div class="card50 gap-1 d-flex justify-content-center align-items-center w-100">
                                                <img style="width: 30% !important;" src="./img/icon/parabrisa.svg" alt="" srcset="">
                                                <br><br>
                                                <p style="margin: 0px !important;">Vidros
                                                <br>Plus</p>
                                            </div>
                                        </div>
                                        <div class="beneficio-item active">
                                            <div class="card50 gap-1 d-flex justify-content-center align-items-center w-100">
                                                <img style="width: 30% !important;" src="./img/icon/FUNERAL.svg" alt="" srcset="">
                                                <br><br>
                                                <p style="margin: 0px !important;">Aux.
                                                <br>Funeral</p>
                                            </div>
                                        </div>
                                        <div class="beneficio-item active">
                                            <div class="card50 gap-1 d-flex justify-content-center align-items-center w-100">
                                                <img style="width: 30% !important;" src="./img/icon/ferramentas.svg" alt="" srcset="">
                                                <br><br>
                                                <p style="margin: 0px !important;">Aux.
                                                <br>Pequenos
                                                <br>Reparos</p>
                                            </div>
                                        </div>
                                    </div>
                            </section>           
                            </div>
                    </article>
                </section>
            <!--Parceiros-->
            <br>
            <!--Empresa-->
                <section>
                    <article class="container-md d-flex justify-content-evenly align-items-center">
                        <div class="d-flex justify-content-evenly align-items-center w-100">
                            <!--Img-->
                                <img class="imgdesktop w-50" id="Img" src="./img/home-sobre-a-empresa.webp" alt="Imagem 01">
                            <!--Img-->
                            <!--Texto-->
                                <span id="SessaoTexto" class="w-50" style="color: var(--roxo-vendex);">
                                    <!--Titulo-->
                                        <h4 id="w-100">Sobre a Empresa</h4>
                                        <h2 id="w-100" style="color: var(--azul-vm); font-weight: 750;">VM BRASIL PROTEÇÃO VEICULAR</h2>
                                    <!--Titulo-->
                                    <br>
                                    <!--Img-->
                                        <img class="imgmobile w-50" src="./img/home-sobre-a-empresa.webp" alt="Imagem 01">
                                    <!--Img-->
                                    <br class="brmobile">
                                    <!--Legenda-->
                                        <span id="w-100">
                                            <p id="w-100">SA VM Brasil Proteção Veicular é uma associação consolidada no mercado há mais de 6 anos, crescendo com força no Nordeste e conquistando espaço em todo o Brasil. Nascemos com o compromisso de oferecer uma proteção acessível, eficiente e humanizada para quem valoriza segurança e tranquilidade ao dirigir.</p>
                                        </span>
                                    <!--Legenda-->
                                    <br>
                                    <button id="btn02" class="Btn01">Contato</button>
                                </span>    
                            <!--Texto-->
                        </div>
                    </article>
                </section>
            <!--Empresa-->
                <br class="brmobile">
            <!--Contato-->
                <?php echo $contatoo ?>
            <!--Contato-->
            <!--Numeros-->
                <section id="sessaocliente" style="background: url(./img/background-numeros1.webp); background-size: cover;">
                    <!--Mapa-->
                        <article class="container-md d-flex p-4">
                            <!--Texto-->
                            <span id="SessaoTexto">
                                <!--Titulo-->
                                <h2 id="w-100" style="color: var(--amarelo-vm); font-weight: 750; width: 32%;">VM Brasil Proteção Veicular</h2>
                                <br>
                                <!--Legenda-->
                                <div id="w-100" class="text-white w-50">
                                    <p>A VM BRASIL segue as diretrizes da SUSEP, garantindo proteção veicular com credibilidade, ética e responsabilidade.</p>
                                </div>
                                <br class="brmobile">
                                <!--Numeros-->
                                <div id="NumerosSessao" class="d-flex">
                                    <span>
                                        <span class="d-flex align-items-center text-white">
                                            <h1 style="display: none; color: var(--amarelo-vm);" id="contador01">0</h1>
                                        </span>
                                        <p class="text-white">Estados</p>
                                    </span>
                                    <span>
                                        <span class="d-flex align-items-center text-white">
                                            <h1 style="display: none; color: var(--amarelo-vm);" id="contador03">0</h1>
                                            <h1 style="color: var(--amarelo-vm);">%</h1>
                                        </span>
                                        <p class="text-white">Peças Originais</p>
                                    </span>
                                </div>
                                <br>
                                <div id="NumerosSessao" class="d-flex">
                                    <span>
                                        <span class="d-flex align-items-center text-white">
                                            <h1 style="color: var(--amarelo-vm);">+</h1>
                                            <h1 style="display: none; color: var(--amarelo-vm);" id="contador02">0</h1>
                                            <h1 style="color: var(--amarelo-vm);">Mil</h1>
                                        </span>
                                        <p class="text-white">Associados Ativos</p>
                                    </span>
                                    <span>
                                        <span class="d-flex align-items-center text-white">
                                            <h1 style="color: var(--amarelo-vm);">+</h1>
                                            <h1 style="display: none; color: var(--amarelo-vm);" id="contador04">0</h1>
                                        </span>
                                        <p class="text-white">Produtos Entregues</p>
                                    </span>
                                </div>
                                <!--Numeros-->
                            </span>
                            <!--Texto-->
                        </article>
                    <!--Mapa-->    
                    <br>
                </section>
            <!--Numeros-->
            <br class="textodesktop">
            <!--Diferenciais-->
                <section id="sessaocliente">
                    <!--Diferenciais-->
                        <article id="SessaoTexto1" class="container-md d-flex justify-content-evenly align-items-center">
                            <button id="btn03" class="Btn01 textomobile">Contato</button>
                            <br>
                            <!--icons-->
                                <div id="w-100" class="w-50 d-flex">
                                    <div>
                                        <span id="IconDiferenciais" style="gap: 1rem;" class="d-flex justify-content-center align-items-center">
                                            <span style="background: #001F8F; padding: 1.2rem 1.1rem; border-radius: 15px;" class="justify-content-center align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 100 75">
                                                    <path id="Caminho_184" data-name="Caminho 184" d="M43.75,79.5s-6.25,0-6.25-6.25,6.25-25,31.25-25S100,67,100,73.25s-6.25,6.25-6.25,6.25Zm25-37.5A18.75,18.75,0,1,0,50,23.25,18.75,18.75,0,0,0,68.75,42ZM32.6,79.5a13.986,13.986,0,0,1-1.35-6.25c0-8.469,4.25-17.189,12.1-23.25a39.531,39.531,0,0,0-12.1-1.75C6.25,48.25,0,67,0,73.25S6.25,79.5,6.25,79.5ZM28.125,42A15.625,15.625,0,1,0,12.5,26.375,15.625,15.625,0,0,0,28.125,42Z" transform="translate(0 -4.5)" fill="#b56afc" fill-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                            <span class="w-50">
                                                <p class="w-100"> Atendimento ágil e humanizado </p>
                                            </span>
                                        </span>
                                        <br>
                                        <span id="IconDiferenciais02" style="gap: 1rem;" class="d-flex justify-content-center align-items-center">
                                            <span style="background: #001F8F; padding: 1.2rem 1.1rem; border-radius: 15px;" class="justify-content-center align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 75 75">
                                                    <path id="Caminho_184" d="M70.9,52.148a4.073,4.073,0,0,1,2.831,1.173A3.824,3.824,0,0,1,75,56.25V70.9A4.36,4.36,0,0,1,70.9,75a69.711,69.711,0,0,1-35.644-9.473A69.967,69.967,0,0,1,9.473,39.746,69.711,69.711,0,0,1,0,4.1,3.92,3.92,0,0,1,1.269,1.271,3.93,3.93,0,0,1,4.1,0H18.75a3.82,3.82,0,0,1,2.929,1.269A4.085,4.085,0,0,1,22.852,4.1,46.632,46.632,0,0,0,25.2,18.944a4,4,0,0,1-.977,4.3L15.04,32.421a61.272,61.272,0,0,0,27.54,27.54l9.179-9.179a4,4,0,0,1,4.3-.977A46.631,46.631,0,0,0,70.9,52.148ZM37.5,0H75V29.1H50L37.5,41.6Z" fill="#b56afc"></path>
                                                  </svg>
                                            </span>
                                            <span class="w-50">
                                                <p class="w-100">Atendeminto personalizado para você</p>
                                            </span>
                                        </span>
                                    </div>
                                    <div>
                                        <span id="IconDiferenciais03" style="gap: 1rem;" class="d-flex justify-content-center align-items-center">
                                            <span style="background: #001F8F; padding: 1.2rem 1.1rem; border-radius: 15px;" class="justify-content-center align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 75.053 75">
                                                    <path id="Caminho_184" d="M73.162,75H68.47a2.729,2.729,0,0,1-1.833-.7,3.05,3.05,0,0,1-1.026-1.65L62.385,56.232H34.232l3.226,16.422a1.861,1.861,0,0,1-.329,1.65,1.888,1.888,0,0,1-1.577.7H30.86a2.64,2.64,0,0,1-1.76-.7,3.05,3.05,0,0,1-1.026-1.65L14.144,2.346A1.892,1.892,0,0,1,14.474.659,1.927,1.927,0,0,1,16.05,0H59.013a1.812,1.812,0,0,1,1.393.551,1.914,1.914,0,0,1,.513,1.355.36.36,0,0,0,.073.184.36.36,0,0,1,.073.184l13.93,70.381a1.861,1.861,0,0,1-.329,1.65A1.809,1.809,0,0,1,73.162,75ZM42.224,23.387a15.114,15.114,0,0,1-6.488-1.355q-2.894-1.355-2.9-3.337a4.047,4.047,0,0,1,1.868-3.3A8.486,8.486,0,0,1,39.877,14a18.933,18.933,0,0,1,4.4.294,8.682,8.682,0,0,1,2.64,2.052,7.487,7.487,0,0,1,.659,1.026,3.815,3.815,0,0,0,.734.991,1.364,1.364,0,0,0,.953.329,2.592,2.592,0,0,0,1.8-.7,1.611,1.611,0,0,0,.551-1.65,8.952,8.952,0,0,0-2.676-5.022q-1.8-1.428-6.709-2.017,0-1.247-.038-1.868a6.625,6.625,0,0,0-.256-1.393,1.823,1.823,0,0,0-.734-1.1,2.434,2.434,0,0,0-1.32-.329,2.2,2.2,0,0,0-1.32.367,2.037,2.037,0,0,0-.734,1.174,7.17,7.17,0,0,0-.257,1.431q-.038.626-.038,1.723-5.205.659-7.295,2.53T28.147,18.7q0,4.98,3.85,7.184t10.227,2.2a14.769,14.769,0,0,1,6.488,1.393q2.894,1.393,2.9,3.3a4.04,4.04,0,0,1-1.868,3.3,8.492,8.492,0,0,1-5.17,1.393,18.933,18.933,0,0,1-4.4-.294,8.682,8.682,0,0,1-2.64-2.052,4.42,4.42,0,0,1-.659-.953,4.575,4.575,0,0,0-.734-1.026,1.294,1.294,0,0,0-.953-.367,2.52,2.52,0,0,0-1.8.734,1.6,1.6,0,0,0-.551,1.612q.88,3.666,2.676,5.095t6.709,1.944q0,1.32.038,1.906a6.58,6.58,0,0,0,.256,1.355,1.907,1.907,0,0,0,.7,1.1,2.745,2.745,0,0,0,2.676-.038,2.042,2.042,0,0,0,.734-1.174,7,7,0,0,0,.256-1.393q.035-.586.038-1.76,5.205-.586,7.295-2.457T56.3,32.771a7.654,7.654,0,0,0-3.85-7.149Q48.6,23.385,42.224,23.387ZM12.678,56.232,9.452,72.654A3.05,3.05,0,0,1,8.426,74.3a2.729,2.729,0,0,1-1.833.7H1.9a1.813,1.813,0,0,1-1.5-.7,1.853,1.853,0,0,1-.329-1.65l11.657-58.87,8.431,42.448Zm36.656,4.692-2.346,11.73a3.05,3.05,0,0,1-1.026,1.65,2.64,2.64,0,0,1-1.76.7H42.151L39.437,63.343l.513-2.419Z" transform="translate(-0.005)" fill="#b56afc"></path>
                                                  </svg>
                                            </span>
                                            <span class="w-50">
                                                <p class="w-100">Associação cadastrada na SUSEP</p>
                                            </span>
                                        </span>
                                        <br>
                                        <span id="IconDiferenciais04" style="gap: 1rem;" class="d-flex justify-content-center align-items-center">
                                            <span style="background: #001F8F; padding: 1.2rem 1.1rem; border-radius: 15px;" class="justify-content-center align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 85.714 75">
                                                    <g id="Caminho_184" data-name="Grupo 73" transform="translate(-1013 -1465)">
                                                      <path id="Caminho_184" data-name="Caminho 180" d="M7.555,22.5H18.166a5.305,5.305,0,0,1,5.305,5.305V43.722a5.305,5.305,0,0,1-5.305,5.305H7.555A5.305,5.305,0,0,1,2.25,43.722V27.805A5.305,5.305,0,0,1,7.555,22.5Z" transform="translate(1016.056 1490.973)" fill="#b56afc"></path>
                                                      <path id="Caminho_184" data-name="Caminho 181" d="M18.805,13.5H29.416a5.305,5.305,0,0,1,5.305,5.305V55.943a5.305,5.305,0,0,1-5.305,5.305H18.805A5.305,5.305,0,0,1,13.5,55.943V18.805A5.305,5.305,0,0,1,18.805,13.5Z" transform="translate(1031.746 1478.751)" fill="#b56afc"></path>
                                                      <path id="Caminho_184" data-name="Caminho 183" d="M30.055,2.25H40.666a5.331,5.331,0,0,1,5.305,5.357V71.893a5.331,5.331,0,0,1-5.305,5.357H30.055a5.331,5.331,0,0,1-5.305-5.357V7.607A5.331,5.331,0,0,1,30.055,2.25Z" transform="translate(1047.438 1462.75)" fill="#b56afc"></path>
                                                      <path id="Caminho_184" data-name="Caminho 182" d="M0,34.153A2.666,2.666,0,0,1,2.679,31.5H83.036a2.653,2.653,0,1,1,0,5.305H2.679A2.666,2.666,0,0,1,0,34.153Z" transform="translate(1013 1503.195)" fill="#b56afc" fill-rule="evenodd"></path>
                                                    </g>
                                                  </svg>
                                            </span>
                                            <span class="w-50">
                                                <p class="w-100">Velocidade, qualidade e confiança</p>
                                            </span>
                                        </span>
                                    </div>
                                </div>       
                                 
                            <!--icons-->
                                <br class="brmobile">
                            <!--Texto-->
                                <div id="w-100" class="w-50">
                                    <span style="color: var(--roxo-vendex);">
                                        <h4>Nossos Diferenciais</h4>
                                        <h3 style="color: var(--azul-vm); font-weight: 750;">SOLUÇÕES PERSONALIZADAS E EXCELENTES RESULTADOS</h3>
                                        <br>
                                        <button id="btn03" class="Btn01 textodesktop">Contato</button>
                                    </span>
                                </div>
                            <!--Texto-->    
                        </article>
                    <!--Diferenciais-->
                </section>
            <!--Diferenciais-->
            <br>
            <!--Redes Sociais-->
                <?php echo $redes ?> 
            <!--Redes Sociais-->
            <!--Case de sucesso-->
                <section class="p-4">
                    <article class="container-md">
                        <!--Texto-->
                        <div>
                            <span class="d-flex flex-column align-items-center text-center">
                                <!--Titulo-->
                                    <h3 style="color: var(--roxo-vendex); font-weight: 750;">CASES DE SUCESSO</h3>
                                <!--Titulo-->
                                <!--Texto-->
                                    <span class="textodesktop">
                                        <p >Conheça alguns de nossos Cases de Sucesso e descubra o que nossa equipe de profissionais pode</p>
                                        <p>fazer por sua empresa.</p>
                                    </span>
                                    <span class="textomobile">
                                        <p >Conheça alguns de nossos Cases de Sucesso e descubra o que nossa equipe de profissionais pode fazer por sua empresa.</p>
                                    </span>
                                <!--Texto-->
                            </span>
                            <br>
                            <!--Cases-->
                                <div>
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="d-flex justify-content-center align-items-center w-100">
                                                    <img class="d-block w-50" src="./img/carro.webp" alt="First slide">
                                                    <img class="d-block w-50" src="./img/carro2.webp" alt="First slide">
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="d-flex justify-content-center align-items-center w-100">
                                                    <img class="d-block w-50" src="./img/caminhao.webp" alt="First slide">
                                                    <img class="d-block w-50" src="./img/caminhao2.webp" alt="First slide">
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="d-flex justify-content-center align-items-center  w-100">
                                                    <img class="d-block w-50" src="./img/motos.webp" alt="First slide">
                                                    <img class="d-block w-50" src="./img/moto2.webp" alt="First slide">
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only"></span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only"></span>
                                        </a>
                                        </div>
                                </div>
                            <!--Cases-->
                        </div>
                        <!--Texto-->
                    </article>
                </section>
            <!--Case de sucesso-->
            <!--Formulario-->
                <?php echo $formulario ?>  
            <!--Formulario-->
            <br><br>
        </main>
    <!--Conteudo Principal-->
    <!--Footer-->
        <?php echo $footer ?>  
    <!--Footer-->
</body>
    <?php echo $headjs ?>
    <script>
          document.addEventListener('DOMContentLoaded', () => {
    const track = document.getElementById('carousel-track');
    const items = Array.from(track.children);
    const itemWidth = items[0].offsetWidth;
    let index = 0;

    // Duplica os itens para loop infinito
    items.forEach(item => {
      const clone = item.cloneNode(true);
      track.appendChild(clone);
    });

    setInterval(() => {
      index++;
      track.style.transition = 'transform 0.5s ease-in-out';
      track.style.transform = `translateX(-${itemWidth * index}px)`;

      if (index >= items.length) {
        setTimeout(() => {
          track.style.transition = 'none';
          track.style.transform = 'translateX(0)';
          index = 0;
        }, 50);
      }
    }, 2000);
  });
    </script>
</html>