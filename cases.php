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
    <title>Cases - Vm Brasil ProteçãoVeicular</title>
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
                <section id="paddingprimario" style="padding: 5rem 0px 16rem 0px;" class="container-md d-flex justify-content-between" >
                    <!--Estrutura texto-->
                        <article id="Mobileprimeira2" class="d-flex flex-column text-white">
                            <!--Titulo-->
                                <h1 id="w-100" style="padding-bottom: 2rem;font-weight: 700; color: var(--amarelo-vm);">Cases de sucesso</h1>
                            <!--Titulo-->
                            <!--Texto-->
                                <strong ><p id="w-100" style="font-size: 1.1rem">Antes e depeois realizados pela VmBrasil Proteção - Veicular.</p></strong>
                            <!--Texto-->
                        </article>
                    <!--Estrutura texto-->
                </section>
            <!--Apresentação-->
        </section>
    <!--Container principal das paginas estaticas-->  
    <main>
            <!--Case de sucesso-->
                <section class="p-4">
                    <article class="container-md">
                        <!--Texto-->
                        <div>
                            <span class="d-flex flex-column align-items-center text-center">
                                <!--Titulo-->
                                    <h3 style="color: var(--roxo-vendex); font-weight: 750;">CARRO</h3>
                                <!--Titulo-->
                            </span>
                            <br>
                            <!--Cases-->
                                <div>
                                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel" data-interval="5000">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="d-flex justify-content-center align-items-center w-100">
                                                    <img class="d-block w-50" src="./img/3.png" alt="First slide">
                                                    <img class="d-block w-50" src="./img/4.png" alt="First slide">
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="d-flex justify-content-center align-items-center w-100">
                                                    <img class="d-block w-50" src="./img/7.png" alt="First slide">
                                                    <img class="d-block w-50" src="./img/8.png" alt="First slide">
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="d-flex justify-content-center align-items-center  w-100">
                                                    <img class="d-block w-50" src="./img/9.png" alt="First slide">
                                                    <img class="d-block w-50" src="./img/10.png" alt="First slide">
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only"></span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
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
        <br><br>
        <!--Formulario-->
            <?php echo $formulario ?>  
        <!--Formulario-->
        <br><br>
    </main>
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
    </script>
</html>        