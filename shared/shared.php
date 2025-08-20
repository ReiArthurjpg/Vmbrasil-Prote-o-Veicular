<?php $headerprincial = '
    <!--header Principal-->
                <header>
                    <!--Estrutura-->
                        <nav class="navbar absolute-top container-md">
                            <!--Logica do header-->
                                <div class="container-fluid">
                                    <!--Logo-->
                                        <a class="navbar-brand w-25" href="./index.php">
                                            <img class="w-100 p-3" src="./img/LogoVendex.webp" alt="LogoPrincipal">
                                        </a>
                                    <!--Logo-->
                                    <!--Menu btn-->
                                        <button class="navbar-toggler " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list text-light" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                                            </svg>
                                        </button>
                                    <!--Menu btn-->
                                    <!--Menu Lista-->
                                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                                            <!--Logica para fechar o header-->
                                                <div class="offcanvas-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                </div>
                                            <!--Logica para fechar o header-->
                                            <!--Menu principal-->
                                                <div class="offcanvas-body">
                                                    <!--Lista-->
                                                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                                            <li class="nav-item ">
                                                                <a class="nav-link active text-white" aria-current="page" href="./index.php">Home</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link text-white" href="./empresa.php">Associação</a>
                                                            </li>
                                                            <!--Lista Drop-->
                                                                <li class="nav-item dropdown">
                                                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Planos
                                                                </a>
                                                                <!--Menu Drop-->
                                                                    <ul class="dropdown-menu" id="offcanvasNavbar">
                                                                        <li>
                                                                            <a class="dropdown-item text-white" target="_blank" href="https://wa.me/558299940437?text=Oi%2C%20tudo%20bem%3F%20Vi%20seu%20an%C3%BAncio%20no%20site%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es.">Plano Ouro</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item text-white" target="_blank" href="https://wa.me/558299940437?text=Oi%2C%20tudo%20bem%3F%20Vi%20seu%20an%C3%BAncio%20no%20site%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es.">Plano Diamante</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item text-white" target="_blank" href="https://wa.me/558299940437?text=Oi%2C%20tudo%20bem%3F%20Vi%20seu%20an%C3%BAncio%20no%20site%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es.">Plano Prata</a>
                                                                        </li>
                                                                    </ul>
                                                                <!--Menu Drop-->
                                                                </li>
                                                            <!--Lista Drop-->
                                                            <li class="nav-item">
                                                                <a class="nav-link text-white" href="./cases.php">Cases</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link text-white" href="./contato.php">Contato</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link text-white" href="./vaga.php">Vagas</a>
                                                            </li>
                                                        </ul>
                                                    <!--Lista-->
                                                </div>
                                            <!--Menu principal-->
                                            <br>
                                            <!--Icons de redes socais-->
                                                <div>
                                                    <!--Lista icons-->
                                                        <ul style="gap: 1rem;" class="d-flex flex-row">
                                                            <!--Instagram-->
                                                                <li>
                                                                    <a href="#"><svg id="icons02" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="fill: #001F8;transform: ;msFilter:;"><path d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z"></path></svg></a>
                                                                </li>
                                                            <!--Instagram-->
                                                            <!--Linkedin-->
                                                                <li>
                                                                    <a href="#"><svg id="icons02" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="fill: #001F8;transform: ;msFilter:;"><circle cx="4.983" cy="5.009" r="2.188"></circle><path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path></svg></a>
                                                                </li>
                                                            <!--Linkedin-->
                                                            <!--Youtube-->
                                                                <li>
                                                                    <a href="#"><svg id="icons02" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="fill: #001F8;transform: ;msFilter:;"><path d="M21.593 7.203a2.506 2.506 0 0 0-1.762-1.766C18.265 5.007 12 5 12 5s-6.264-.007-7.831.404a2.56 2.56 0 0 0-1.766 1.778c-.413 1.566-.417 4.814-.417 4.814s-.004 3.264.406 4.814c.23.857.905 1.534 1.763 1.765 1.582.43 7.83.437 7.83.437s6.265.007 7.831-.403a2.515 2.515 0 0 0 1.767-1.763c.414-1.565.417-4.812.417-4.812s.02-3.265-.407-4.831zM9.996 15.005l.005-6 5.207 3.005-5.212 2.995z"></path></svg></a>
                                                                </li>
                                                            <!--Youtube-->
                                                        </ul>
                                                    <!--Lista icons-->
                                                </div>
                                            <!--Icons de redes socais-->
                                        </div>
                                    <!--Menu Lista-->
                                </div>
                            <!--Logica do header-->
                        </nav>
                    <!--Estrutura-->
                </header>    
            <!--header Principal-->
'
?>
<?php $headersecundario = '
    <!--Header Secundario-->
                <header class="HeaderSecundario">
                    <!--Estrutura-->
                        <nav style="padding: 0px !important; background: var(--azul-vm) !important" class="navbar fixed-top">
                            <!--Logica do header-->
                                <div class="container-fluid container-md">
                                    <!--Logo-->
                                        <a class="navbar-brand w-25" href="./index.php">
                                            <img id="LogoSecundario" class="w-100 p-2" src="./img/logovendex.webp" alt="LogoPrincipal">
                                        </a>
                                    <!--Logo-->
                                    <!--Menu btn-->
                                        <button class="navbar-toggler " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                                            <svg style="color: #fff;" id="BtnHeaderSecundario" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                                            </svg>
                                        </button>
                                    <!--Menu btn-->
                                </div>
                            <!--Logica do header-->
                        </nav>
                    <!--Estrutura-->
                </header>  
            <!--Header Secundario-->
'
?>
<?php $footer = '
    <section>
            <footer id="padding" style="background: var(--azul-vm)" class="p-5">
                <article id="heigth" class="container-md d-flex justify-content-evenly align-items-center">
                    <div class="text-light">
                        <!--Img-->
                            <img id="w-100" class="w-75" src="./img/LogoVendex.webp" alt="">
                        <!--Img-->
                        <br>
                        <!--Texto-->
                            <span>
                                <p id="w-100" class="w-75">Com a nossa associação, você garante suporte completo em casos de roubo, furto, colisões, perda total e assistência 24h em todo o Brasil.
                                    Sem burocracia, com atendimento humano, rápido e eficiente.
                                    Seu veículo protegido, sua tranquilidade garantida.
                                </p>
                            </span>    
                        <!--Texto-->
                    </div>
                    <!--Icons redes Sociais-->
                        <div>
                            <span class="d-flex flex-column align-items-center justify-content-center">
                                <br>
                                <h4 class="text-light">Redes Sociais:</h4>
                                <ul id="IconsHeader" class="d-flex flex-row">
                                    <li>
                                       <svg id="icons03" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="fill: #F0A820;transform: ;msFilter:;"><path d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z"></path></svg>
                                    </li>
                                    <li>
                                        <svg id="icons03" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="fill: #F0A820;transform: ;msFilter:;"><circle cx="4.983" cy="5.009" r="2.188"></circle><path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path></svg>
                                    </li>
                                    <li>
                                        <svg id="icons03" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="fill: #F0A820;transform: ;msFilter:;"><path d="M21.593 7.203a2.506 2.506 0 0 0-1.762-1.766C18.265 5.007 12 5 12 5s-6.264-.007-7.831.404a2.56 2.56 0 0 0-1.766 1.778c-.413 1.566-.417 4.814-.417 4.814s-.004 3.264.406 4.814c.23.857.905 1.534 1.763 1.765 1.582.43 7.83.437 7.83.437s6.265.007 7.831-.403a2.515 2.515 0 0 0 1.767-1.763c.414-1.565.417-4.812.417-4.812s.02-3.265-.407-4.831zM9.996 15.005l.005-6 5.207 3.005-5.212 2.995z"></path></svg>
                                    </li>
                                </ul>
                            </span>
                        </div>
                    <!--Icons redes Sociais-->
                </article>
            </footer>
            <article style="background: var(--azul-vm);" class="text-center p-1">
                <!--Rodapé-->
                    <div>
                        <p class="text-light">© 2024 VM Brasil Proteção Veicular | Todos os direitos reservados | Política de privacidade | Desenvolvido por Arthur Ribeiro</p>
                    </div>
                <!--Rodapé-->    
            </article>
        </section>
'
?>
