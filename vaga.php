<?php 
    include './shared/shared.php';
    include './shared/head.php';
    include './shared/Lps.php';

    include './sql/db.php';

        $sql = "SELECT * FROM vagas ORDER BY id DESC";
        $stmt = $conn->query($sql);
        $vagas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pagina sobre a empresa">
    <title>Vagas - Vm Brasil ProteçãoVeicular</title>
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
                                <h1 id="w-100" class="w-75" style="padding-bottom: 2rem;font-weight: 700; color: var(--amarelo-vm);">Venha trabalhar com a gente!</h1>
                            <!--Titulo-->
                        </article>
                    <!--Estrutura texto-->
                </section>
            <!--Apresentação-->
        </section>
    <!--Container principal das paginas estaticas-->  
    <main>
            <!--Equipe-->
                <section id="padding" class="p-5">
                    <article class="container-md">
                        <!--Texto-->
                        <div>
                            <span class="d-flex flex-column align-items-center ">
                                <!--Titulo-->
                                    <h4 class="text-center">Junte-se à nossa equipe</h4>
                                <!--Titulo-->
                                <!--Texto-->
                                    <span  class="text-center">
                                        <p>Incentivamos uma mentalidade centrada no associado, acelerada e focada na execução através de dados. Tudo isso misturado com muita tecnologia e um ambiente muito agradável de se trabalhar...</p>
                                    </span>
                                <!--Texto-->
                                <!--Texto-->
                                    <span class="text-center">
                                        <p>Se você deseja se juntar à revolução da Proteção - Veicular e impactar a vida de milhões de pessoas,convidamos você a ser uma parte fundamental da transformação de associações que estão começando no Brasil.</p>
                                    </span>
                                <!--Texto-->
                            </span>
                        </div>
                        <br>
                        <!--texto-->
                        <?php foreach ($vagas as $vaga): ?>
                            <details>
                                    <summary style="color: #001F8F;"> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" style="fill: #F0A820;transform: ;msFilter:;"><path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z"></path></svg>
                                            <?= $vaga['titulo']; ?>
                                    </summary>
                                    <br>
                                        <span>
                                            <p style="font-size: 1rem;">Responsabilidades:</p>
                                            <br>
                                            <p style="font-size: 0.9rem;">• <?= $vaga['descricao']; ?></p>
                                            <p style="font-size: 0.9rem;">• <?= $vaga['descricao01']; ?></p>
                                            <p style="font-size: 0.9rem;">• <?= $vaga['descricao02']; ?></p>
                                            <p style="font-size: 0.9rem;">• <?= $vaga['descricao03']; ?></p>
                                            <p style="font-size: 0.9rem;">• <?= $vaga['descricao04']; ?></p>
                                        </span>    
                                        <br>
                                        <span>
                                            <p style="font-size: 1rem;">Requisitos:</p>
                                            <br>
                                            <p style="font-size: 0.9rem;">• <?= $vaga['requisitos']; ?></p>
                                            <p style="font-size: 0.9rem;">• <?= $vaga['requisitos01']; ?></p>
                                            <p style="font-size: 0.9rem;">• <?= $vaga['requisitos02']; ?></p>
                                            <p style="font-size: 0.9rem;">• <?= $vaga['requisitos03']; ?></p>
                                            <p style="font-size: 0.9rem;">• <?= $vaga['requisitos04']; ?></p>
                                        </span>  
                                        <br> 
                                        <span>
                                            <p style="font-size: 1rem;">Oferecemos:</p>
                                            <br>
                                            <p style="font-size: 0.9rem;">•<?= $vaga['beneficios']; ?></p>
                                            <p style="font-size: 0.9rem;">• <?= $vaga['beneficios01']; ?></p>
                                            <p style="font-size: 0.9rem;">• <?= $vaga['beneficios02']; ?></p>
                                            <p style="font-size: 0.9rem;">• <?= $vaga['beneficios03']; ?></p>
                                            <p style="font-size: 0.9rem;">• <?= $vaga['beneficios04']; ?></p>
                                        </span>   
                                </details>
                                <br>
                            <?php endforeach; ?>
                        </div>
                    </article>
                </section>
            <!--Equipe-->
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