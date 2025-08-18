<?php 
    include './shared/shared.php';
    include './shared/head.php';
    include './shared/Lps.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pagina sobre a empresa">
    <title>Associação - Vm Brasil ProteçãoVeicular</title>
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
        <section  style="background: url(./img/banner-principal.webp); background-size: cover">
            <!--Header Primario-->
                <?php echo $headerprincial ?>
            <!--Header Primario-->
            <!--Header Secundario-->
                <?php echo $headersecundario ?>
            <!--Header Primario-->
            <!--Apresentação-->
                <section id="paddingprimario" style="padding: 5rem 0px 13rem 0px;" class="container-md d-flex justify-content-between" id="ContainerApresentacao">
                    <!--Estrutura texto-->
                        <article id="Mobileprimeira2" class="d-flex flex-column text-white">
                            <!--Titulo-->
                                <h1 id="w-100" style="padding-bottom: 2rem; font-weight: 700; color: var(--amarelo-vm);">Nossa Associação</h1>
                            <!--Titulo-->
                            <!--Texto-->
                                <p id="w-100" class="w-50" style="font-size: 1.1rem">A VM Brasil Proteção Veicular é uma associação consolidada no mercado há mais de 6 anos, crescendo com força no Nordeste e conquistando espaço em todo o Brasil. Nascemos com o compromisso de oferecer uma proteção acessível, eficiente e humanizada para quem valoriza segurança e tranquilidade ao dirigir.</p></strong>
                            <!--Texto-->
                        </article>
                    <!--Estrutura texto-->
                </section>
            <!--Apresentação-->
        </section>
    <!--Container principal das paginas estaticas-->  
    <!--Conteudo principal-->
        <main>
            <!--Serviços-->
                <section id="paddingprimario2" class="p-5">
                    <article>
                        <!--Texto-->
                        <div>
                            <span class="d-flex flex-column align-items-center text-center">
                                <!--Titulo-->
                                    <h4 style=" font-weight: 750;">Os melhores profissionais a seu serviço!</h4>
                                <!--Titulo-->
                                <!--Texto-->
                                    <span>
                                        <p >Com assistência 24 horas e cobertura em todo o território nacional, protegemos carros, motos, caminhões e frotas com seriedade, agilidade e respeito. Nossos serviços incluem proteção contra roubo, furto, colisão, incêndio, danos a terceiros carro reserva e muito mais, sem burocracia e com atendimento de excelência..</p>
                                    </span>
                                <!--Texto-->
                            </span>
                        </div>
                    </article>
                </section>
            <!--Serviços-->
            <!--Sobre Nós-->
                <section>
                    <article class="container-md d-flex justify-content-evenly align-items-center">
                        <!--Texto-->
                            <span id="SessaoTexto" class="w-50" style="color: var(--roxo-vendex);">
                                <!--Titulo-->
                                    <h4 >Sobre nós</h4>
                                    <h3 id="w-100" style="color: var(--azul-vm); font-weight: 750;">CONTAMOS COM UM TIME DE ESPECIALISTAS PARA GARANTIR SUA SEGURANÇA!</h3>
                                <!--Titulo-->
                                <br>
                                <!--Img-->
                                    <img class="imgmobile w-50" src="./img/empresaSobrenos.webp" alt="Imagem 01">
                                <!--Img-->
                                <!--Legenda-->
                                    <span class="textocontatomobile" style="font-size: .95rem;">
                                        <p id="w-100">Hoje, temos orgulho em dizer que a VM Brasil está cadastrada na SUSEP – um marco que reforça nossa credibilidade e responsabilidade diante dos nossos associados.</p>
                                        <P id="w-100">Nosso time é formado por consultores preparados e comprometidos, prontos para oferecer a melhor orientação e atendimento do primeiro contato até o pós-venda. Contamos também com a confiança e representatividade da nossa embaixadora, a apresentadora Jaqueline Cruz, que leva a força da nossa marca para todo o país.</P>
                                    </span>
                                <!--Legenda-->
                                <br>
                                <button class="Btn01">Contato</button>
                            </span>    
                        <!--Texto-->
                        <!--Img-->
                            <img class="imgdesktop w-50" id="Img" src="./img/empresaSobrenos.webp" alt="Imagem 01">
                        <!--Img-->
                    </article>
                </section>
                <br id="SessaoCards"><br id="SessaoCards"><br>
            <!--Contato-->
                <?php echo $contatoo ?>
            <!--Contato-->
            <!--Sobre Nós-->
                <section>
                    <article class="container-md d-flex justify-content-evenly align-items-center">
                        <!--Img-->
                            <img class="w-50" id="Img" src="./img/empresa-nossa-historia.jpg" alt="Imagem 01">
                        <!--Img-->
                        <!--Texto-->
                            <span id="SessaoTexto" class="w-50" style="color: var(--roxo-vendex);">
                                <!--Titulo-->
                                    <h4>Nosso compromisso</h4>
                                    <h3 style="color: var(--azul-vm); font-weight: 750;">COM A EFICIÊNCIA!</h3>
                                <!--Titulo-->
                                <br>
                                <!--Legenda-->
                                    <span>
                                        <p>Nossa associação valoriza o comprometimento com os objetivos a que se propõe realizar e os desafios são o que nos impulsiona para um contínuo aperfeiçoamento, para oferecer as melhores soluções com os melhores rendimentos, uma característica de nossa trajetória.</p>
                                        <p>A VM Brasil não é só uma proteção veicular. É um movimento de confiança, transparência e cuidado com o seu bem mais valioso.</p>
                                            <br>
                                        <p>VM Brasil Proteção Veicular você mais que <strong>PROTEGIDO!</strong></p>
                                    </span>
                                <!--Legenda-->
                                <br>
                            </span>    
                        <!--Texto-->
                    </article>
                </section>
            <!--Sobre Nós-->
            <!--MVV-->
                <section class="p-5">
                    <article style="gap: 1rem;" class="container-md d-flex justify-content-center align-items-center p-3">
                        <div style="width: 22rem !important;" id="Cards06" class="card  text-center d-flex justify-content-center w-50">
                            <svg class="w-100 p-3" id="Grupo_87" data-name="Grupo 87" xmlns="http://www.w3.org/2000/svg" width="174.554" height="175.126" viewBox="0 0 174.554 175.126">
                                <path id="Caminho_202" data-name="Caminho 202" d="M-3420.273,134.433a42.671,42.671,0,0,0-42.671,42.671,42.671,42.671,0,0,0,42.671,42.671A42.671,42.671,0,0,0-3377.6,177.1,42.671,42.671,0,0,0-3420.273,134.433Zm0,56.363a13.691,13.691,0,0,1-13.69-13.691,13.69,13.69,0,0,1,13.69-13.69,13.69,13.69,0,0,1,13.691,13.69A13.691,13.691,0,0,1-3420.273,190.8Z" transform="translate(3493.859 -75.659)" fill="#fff"></path>
                                <path id="Caminho_203" data-name="Caminho 203" d="M-3448.891,204.765c-3.592-.556-7.25-.842-10.765-1.71-30.016-7.412-49.38-26.053-56.465-56.124a72.758,72.758,0,0,1,46.977-85.352c26.482-9.221,50.941-4.509,72.791,13.2.609.494,1.2,1.013,1.995,1.69,1.164-1.232,2.351-2.378,3.39-3.646a2.954,2.954,0,0,0,.425-1.74c.031-5.587.056-11.174,0-16.76a5.467,5.467,0,0,1,1.719-4.25c6.39-6.348,12.713-12.762,19.058-19.154a3.326,3.326,0,0,1,3.858-1.022,3.417,3.417,0,0,1,2.176,3.528c0,.4,0,.8,0,1.2q.016,6.926.031,13.853c0,.559,0,1.119,0,1.873,2.463,0,4.782.01,7.1,0,3.021-.016,6.042-.037,9.062-.083,1.675-.026,3.056.457,3.747,2.108s0,2.955-1.169,4.134q-9.533,9.575-19.025,19.189a4.9,4.9,0,0,1-3.8,1.551c-5.358-.053-10.718.022-16.075-.05a4.123,4.123,0,0,0-3.277,1.34q-26.8,26.89-53.674,53.711c-.4.4-.788.828-1.22,1.2a3.345,3.345,0,0,1-4.635-.053,3.272,3.272,0,0,1-.094-4.625c2.106-2.243,4.318-4.388,6.5-6.559.883-.878,1.806-1.715,2.744-2.6-7.485-5.061-18.332-.15-19.938,8.782-1.35,7.5,3.572,14.692,10.833,15.819A13.375,13.375,0,0,0-3431,132.7c.089-.619.126-1.246.191-1.869a3.3,3.3,0,0,1,3.359-3.177,3.217,3.217,0,0,1,3.257,3.436,19.4,19.4,0,0,1-9.765,17.159,19.7,19.7,0,0,1-22.333-1.144c-6.822-5.288-9.463-12.4-7.493-20.757,1.992-8.453,7.687-13.555,16.2-15.169a19.191,19.191,0,0,1,14.636,3.162l14.323-14.347A38.471,38.471,0,0,0-3434.5,91.92a40.4,40.4,0,0,0-49.869,33.214c-3.621,22.714,13.558,44.435,36.513,46.168,21.313,1.609,39.779-12.659,43.321-33.622A39.239,39.239,0,0,0-3407.754,114c-.169-.361-.339-.721-.505-1.084-1.017-2.216-.544-4.044,1.282-4.968s3.635-.15,4.724,2a46.021,46.021,0,0,1,4.613,15.116,46.99,46.99,0,0,1-25.728,48.016c-28.034,14.125-62.372-3.435-67.288-34.41a46.912,46.912,0,0,1,39.468-54.188c13.469-1.98,25.643,1.433,36.345,9.915.357.283.71.57,1.069.851.041.032.108.029-.012,0l14.288-14.319a65.985,65.985,0,0,0-30.83-15.644,67.2,67.2,0,0,0-78.366,46.487c-10.689,35.12,9.511,72.863,44.671,83.47a66.933,66.933,0,0,0,84.156-45.326c5.754-19.612,2.833-38.207-8.1-55.508-.3-.481-.632-.948-.932-1.432-1.225-1.98-.964-3.842.689-4.966,1.7-1.152,3.7-.718,4.942,1.346a108.266,108.266,0,0,1,6.116,10.845,73.736,73.736,0,0,1-41.414,99.957,69.88,69.88,0,0,1-19.444,4.305,8.714,8.714,0,0,0-1.3.3Zm65.042-139.508.425.224q3.29-3.342,6.578-6.687c2.112-2.152,5.056-3.973,6.1-6.559,1.066-2.651.273-6.051.282-9.124,0-.513-.058-1.026-.081-1.407-4.289,4.169-8.5,8.251-12.69,12.359a1.88,1.88,0,0,0-.583,1.155C-3383.868,58.565-3383.849,61.911-3383.849,65.257Zm29.07-7.891a7.1,7.1,0,0,0-1.143-.324c-2.961,0-5.923-.034-8.882.065a2.916,2.916,0,0,0-1.706.884c-3.815,3.753-7.589,7.55-11.368,11.34-.287.288-.515.634-.969,1.2,3.5,0,6.673.019,9.848-.024a1.944,1.944,0,0,0,1.188-.528C-3363.542,65.878-3359.3,61.752-3354.779,57.366Z" transform="translate(3518.066 -29.639)" fill="#001F8F"></path>
                                <path id="Caminho_204" data-name="Caminho 204" d="M-3278.76,74.7c0-3.346-.02-6.692.026-10.038a1.882,1.882,0,0,1,.583-1.155c4.188-4.108,8.4-8.19,12.69-12.359.023.381.082.894.081,1.407-.009,3.073.784,6.473-.282,9.124-1.04,2.586-3.984,4.407-6.1,6.559q-3.284,3.347-6.577,6.687Z" transform="translate(3412.978 -39.087)" fill="#fff"></path>
                                <path id="Caminho_205" data-name="Caminho 205" d="M-3245.77,78.818c-4.522,4.386-8.764,8.513-13.031,12.612a1.943,1.943,0,0,1-1.188.528c-3.175.043-6.351.024-9.848.024.453-.566.682-.912.969-1.2,3.779-3.791,7.553-7.587,11.368-11.34a2.915,2.915,0,0,1,1.706-.884c2.958-.1,5.921-.065,8.881-.065A7.09,7.09,0,0,1-3245.77,78.818Z" transform="translate(3409.057 -51.091)" fill="#fff"></path>
                            </svg>
                            <div class="card-body">
                                <span class="CardTexto">
                                    <h5 class="card-title" style="font-weight: 750;">Missão</h5>
                                </span>
                                <span >
                                    <p>Oferecer proteção veicular de qualidade, com transparência e agilidade, garantindo tranquilidade e segurança para nossos associados em todo o Brasil..</p>
                                </span>
                            </div>
                        </div>
                        <div style="width: 22rem !important;" id="Cards06" class="card  text-center d-flex justify-content-center w-50">
                            <svg class="w-100 p-3" id="Grupo_85" data-name="Grupo 85" xmlns="http://www.w3.org/2000/svg" width="134.228" height="179.899" viewBox="0 0 134.228 179.899">
                                <path id="Caminho_196" data-name="Caminho 196" d="M-2948.243,84.958h77.563l-13.971,25.323,15.718,27.175h-79.31Z" transform="translate(3000.671 -53.069)" fill="#fff"></path>
                                <path id="Caminho_197" data-name="Caminho 197" d="M-3033.953,209.5c-3.922-1.375-5.526-4.183-5.275-8.265.132-2.159-.017-4.333.036-6.5a6.592,6.592,0,0,1,6.566-6.636c2.039-.067,4.082-.012,6.359-.012,0-2.865,0-5.6,0-8.326,0-5.357,2.472-7.826,7.837-7.831,4.736,0,9.472,0,14.4,0,.037-.721.1-1.335.1-1.95q.007-57.709-.041-115.42a4.657,4.657,0,0,0-1.066-2.761,13.431,13.431,0,0,1,.6-18.2,13.352,13.352,0,0,1,18.037-.93c5.414,4.515,6.677,12.483,2.323,17.957-2,2.511-1.8,4.943-1.748,7.871h2.3q37.162,0,74.323.007a8.946,8.946,0,0,1,2.26.182,2.465,2.465,0,0,1,1.679,3.447,10.176,10.176,0,0,1-.849,1.53c-4.569,7.288-9.109,14.594-13.746,21.838a2.914,2.914,0,0,0-.051,3.705c4.69,7.279,9.244,14.646,13.852,21.978.728,1.158,1.51,2.293.662,3.721-.826,1.388-2.195,1.368-3.562,1.366q-11.684-.006-23.368-.006a7.806,7.806,0,0,1-1.572-.1,2.43,2.43,0,0,1-2.136-2.761,2.34,2.34,0,0,1,2.375-2.353c1.284-.079,2.575-.048,3.864-.048q7.555-.006,15.11,0h2.238c-.51-.845-.819-1.374-1.143-1.892-4.073-6.494-8.112-13.009-12.247-19.463a3.682,3.682,0,0,1-.014-4.5c4.136-6.454,8.175-12.969,12.248-19.463.328-.522.642-1.054,1.092-1.8h-73.241V111h2.015q18.1,0,36.2,0a15.712,15.712,0,0,1,1.929.056,2.4,2.4,0,0,1,2.287,2.453,2.4,2.4,0,0,1-2.09,2.626,10.578,10.578,0,0,1-2.1.127q-18.009.01-36.019.005h-2.225v55.661h1.78c5.974,0,11.948-.009,17.922,0,4.939.009,7.558,2.651,7.574,7.618.009,2.75,0,5.5,0,8.528,1.86,0,3.651-.007,5.44,0,4.778.023,7.366,2.6,7.4,7.385.013,1.874-.127,3.759.03,5.62.342,4.069-1.23,6.895-5.054,8.416Zm70.2-21.422c0-2.921,0-5.549,0-8.177,0-2.433-.272-2.7-2.732-2.7q-25.913,0-51.826,0c-.41,0-.923-.146-1.208.045-.556.374-1.381.921-1.4,1.426-.129,3.078-.065,6.165-.065,9.406,5.5,0,10.816,0,16.131,0,1.288,0,2.582-.055,3.863.042a2.249,2.249,0,0,1,2.343,2.173,4.773,4.773,0,0,1-1.4,2.712c-.361.394-1.314.329-2,.331q-14.757.027-29.515.016c-2.048,0-2.362.317-2.373,2.323-.012,2.166.036,4.334-.016,6.5-.035,1.51.632,2.071,2.118,2.07q39.44-.031,78.881,0c1.538,0,2.089-.653,2.053-2.119-.053-2.165-.071-4.334.006-6.5.059-1.643-.559-2.356-2.252-2.3-2.515.082-5.035.021-7.553.021q-13.7,0-27.407,0c-1.907,0-3-.815-3.186-2.312-.214-1.679,1.06-2.935,3.111-2.944,5.739-.026,11.478-.01,17.217-.01Zm-34.782-131.9V171.8h7.229V56.178Zm11.705-13.2a8.094,8.094,0,0,0-8.139-8.11,8.122,8.122,0,0,0-8.063,8.026,8.05,8.05,0,0,0,8.068,8.166A8.012,8.012,0,0,0-2986.825,42.981Z" transform="translate(3039.254 -29.601)" fill="#001F8F"></path>
                            </svg>
                            <div class="card-body">
                                <span class="CardTexto">
                                    <h5 class="card-title" style="font-weight: 750;">Visão</h5>
                                </span>
                                <span >
                                    <p>Ser referência nacional em proteção veicular, reconhecida pela confiança, qualidade no atendimento e inovação constante na experiência do associado.</p>
                                </span>
                            </div>
                        </div>
                        <div style="width: 22rem !important;" id="Cards06" class="card text-center d-flex justify-content-center w-50">
                            <svg class="w-100 p-3" xmlns="http://www.w3.org/2000/svg" width="200.936" height="171.562" viewBox="0 0 200.936 171.562">
                                <g id="Grupo_86" data-name="Grupo 86" transform="translate(0)">
                                    <path id="Caminho_198" data-name="Caminho 198" d="M-3959.426,115.09l26.205-31.5,2.889-3.474a23.95,23.95,0,0,1-4.061-2.136,4.586,4.586,0,0,1-1.83-2.867,3.885,3.885,0,0,1,1.822-2.66c1.981-1.245,4.281-1.993,6.228-3.279a9.159,9.159,0,0,0,3.175-3.48c1.639-3.477,2.962-7.107,4.348-10.7.569-1.477,1.423-2.55,3.1-2.509,1.581.039,2.38,1.1,2.922,2.491,1.371,3.529,2.862,7.012,4.2,10.553a7.634,7.634,0,0,0,3.591,3.927,22.2,22.2,0,0,0,12.1,2.908c20.074-.173,40.151-.076,60.226-.076.588,0,1.178-.019,1.765.01a2.989,2.989,0,0,1,3.145,2.83,2.985,2.985,0,0,1-3.165,3.027c-2.614.063-5.23.019-7.847.019h-12.329l25.676,33.067,25.545-32.873a15.731,15.731,0,0,0-1.61-.187q-6.965-.018-13.928-.008c-.523,0-1.05.031-1.569-.019a2.928,2.928,0,0,1-2.871-3.089,2.837,2.837,0,0,1,2.98-2.751c7.716-.038,15.434-.094,23.146.077,1.064.024,2.338,1.082,3.113,2,8.9,10.542,17.716,21.151,26.556,31.742,2.095,2.509,4.207,5,6.275,7.536,1.543,1.888,1.515,3.059-.1,4.823q-3.442,3.763-6.943,7.472c-1.466,1.547-3.192,1.717-4.481.53-1.314-1.211-1.258-2.884.164-4.516.386-.444.8-.859,1.2-1.293s.783-.867,1.365-1.512h-56.711q-13.531,44.817-27.116,89.817l.559.49a9.367,9.367,0,0,1,.975-1.586q20.8-22.447,41.628-44.867c1.471-1.584,1.387-2.363-.506-3.417-1.653-.921-3.487-1.555-5.028-2.623a4.269,4.269,0,0,1-1.9-2.808,3.594,3.594,0,0,1,1.914-2.762c5.2-1.617,7.732-5.381,9.039-10.318a16.646,16.646,0,0,1,.657-1.634c.632-1.652,1.11-3.512,3.367-3.543s2.775,1.8,3.431,3.458c1.011,2.549,2.054,5.084,3.092,7.621.042.1.168.168.66.638a14.511,14.511,0,0,1,1.205-1.751q5.907-6.427,11.861-12.811c1.6-1.714,3.245-1.982,4.606-.8,1.412,1.223,1.332,3.032-.292,4.8-3.718,4.043-7.467,8.058-11.2,12.088-.434.468-.846.956-1.326,1.5.542.315.993.566,1.435.835,2.425,1.48,2.4,3.98-.047,5.44a1.551,1.551,0,0,1-.351.172c-5.142,1.459-7.667,5.207-8.942,10.107a8.7,8.7,0,0,1-1.348,3.231,4.621,4.621,0,0,1-2.831,1.855c-.877.032-1.938-1.015-2.654-1.821-.565-.635-.729-1.626-1.326-3.08a25.533,25.533,0,0,1-1.591,2.175q-24.273,26.182-48.571,52.341c-2.648,2.851-3.838,2.842-6.517-.041q-12.016-12.934-24.021-25.879c-.75-.809-1.509-1.609-2.441-2.6-1.278,3.184-2.489,6.133-3.643,9.105-.556,1.433-1.319,2.633-3.005,2.675-1.791.045-2.609-1.183-3.188-2.693-.982-2.559-1.9-5.158-3.1-7.612a8.833,8.833,0,0,0-2.651-2.9,18.818,18.818,0,0,0-3.47-1.8c-1.468-.686-2.9-1.436-2.873-3.327.027-1.782,1.38-2.516,2.792-3.18,1.477-.694,2.947-1.413,4.363-2.221,1.876-1.07,1.965-1.873.531-3.418-4.539-4.887-9.09-9.764-13.6-14.672-1.339-1.455-1.349-3.217-.154-4.377,1.24-1.2,3.031-1.034,4.5.431.231.231.45.474.673.714q5.337,5.751,10.669,11.509c.435.472.794,1.015,1.419,1.824a11.563,11.563,0,0,1,1.28-2.849c.727-.809,1.775-1.895,2.645-1.86a3.921,3.921,0,0,1,2.785,1.9c1.345,2.673,2.208,5.586,3.511,8.284a8.3,8.3,0,0,0,2.653,2.892c1.2.866,2.771,1.232,3.961,2.111a5.962,5.962,0,0,1,2.3,2.849c.386,1.489-.858,2.466-2.188,3.09-.233.109-.445.259-.911.534l17.446,18.8.288-.172-27.158-89.962h-56.629c.466.58.782,1.025,1.15,1.422q12.807,13.808,25.62,27.609a6.941,6.941,0,0,1,1.112,1.361,2.76,2.76,0,0,1-.643,3.707,2.659,2.659,0,0,1-3.592.083,9.894,9.894,0,0,1-1.258-1.232q-15.486-16.673-30.962-33.355c-.484-.521-.924-1.08-1.384-1.621Zm100.214,95,.488,0,27.452-90.937h-55.4Q-3872.884,164.81-3859.212,210.091Zm91.406-97.059-27.657-33.124-25.716,33.124Zm-65.534-.023-25.634-32.992-25.607,32.992Zm-57.322-1.78L-3865,78.174h-2.537c-9.869,0-19.744.2-29.6-.092-4.407-.131-7.777,1.889-11.226,3.89-2.339,1.356-2.443,3.361-.794,5.483q6.5,8.357,12.985,16.72C-3894.379,106.485-3892.571,108.787-3890.662,111.228Zm-6.11,1.775-16.388-21.1a21.593,21.593,0,0,1-1.835,4.187,4.155,4.155,0,0,1-2.726,1.7c-.848.029-1.806-.959-2.574-1.654-.392-.355-.477-1.051-.7-1.6l-4.46-11.071L-3950.1,113Zm-11.8-37.776c-5.583-1.954-7.159-6.836-9.094-12.078-1.8,5.385-3.6,10.093-9.652,12.128,6.232,1.872,7.764,6.79,9.7,11.954C-3915.756,82-3914.157,77.19-3908.573,75.227Zm17.833,111.678-4.675-6.347-4.714,6.322,4.688,6.363Zm88.961-39.489a10.627,10.627,0,0,1-5.421,6.828c3.3,1.5,4.549,4.2,5.443,6.674l4.96-6.727Z" transform="translate(3959.426 -52.483)" fill="#001F8F"></path>
                                    <path id="Caminho_199" data-name="Caminho 199" d="M-3890.78,81.138c-5.584,1.962-7.184,6.77-9.044,12-1.938-5.164-3.469-10.082-9.7-11.954,6.056-2.035,7.851-6.743,9.653-12.128C-3897.939,74.3-3896.363,79.184-3890.78,81.138Z" transform="translate(3941.633 -58.394)" fill="#fff"></path>
                                    <path id="Caminho_200" data-name="Caminho 200" d="M-3857.88,257.878l-4.7,6.338-4.688-6.363,4.714-6.322Z" transform="translate(3926.566 -123.456)" fill="#fff"></path>
                                    <path id="Caminho_201" data-name="Caminho 201" d="M-3717.422,200.024l4.982,6.775-4.96,6.727c-.894-2.476-2.146-5.178-5.443-6.674A10.627,10.627,0,0,0-3717.422,200.024Z" transform="translate(3875.069 -105.09)" fill="#fff"></path>
                                </g>
                            </svg>
                            <div class="card-body">
                                <span class="CardTexto">
                                    <h5 class="card-title" style="font-weight: 750;">Valores</h5>
                                </span>
                                <span>
                                    <p style="font-size: .95rem;">Agimos com transparência, agilidade e cuidado, oferecendo um atendimento humano e eficiente. Nosso compromisso é proteger com excelência e inovar para superar as expectativas dos associados.</p>
                                </span>
                            </div>
                        </div>
                    </article>
                </section>
            <!--MVV-->
            <!--Redes Sociais-->
                <?php echo $redes ?> 
            <!--Redes Sociais-->
            <br><br>
            <!--Formulario-->
                <?php echo $formulario ?>  
            <!--Formulario-->
            <br><br>
        </main>
    <!--Conteudo principal-->
    <!--Footer-->
        <?php echo $footer ?>  
    <!--Footer-->
</body>
    <?php echo $headjs ?>
    <script>
    document.querySelector("#Btnconato03").addEventListener("click", function (event) {
    event.preventDefault();

    scrollto("#formulario")

    console.log("go to up")
    })           
document.querySelector(".Btn01").addEventListener("click", function (event) {
    event.preventDefault();

    scrollto("#formulario")

    console.log("go to up")
})  
    </script>
</html>