<?php 
    include '../shared/shared.php';
    include '../shared/head.php';
    include '../shared/Lps.php';
?>
<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendex - Painel</title>
    <!--Css/js principais-->
        <?php echo $headcss ?>
    <!--Css/js principais-->
    <!--Api-->
        <!--boxicons-->
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!--boxicons-->
    <!--Api-->  
</head>
<body>
    <?php echo $headpainel ?>
            <!--Main-->
                <main class="col">
                    <div class="container">
                        <h3 class="p-2">Vagas Vendex</h3>
                            <form id="jobForm" method="POST" action="../sql/create.php">
                                <div class="">
                                    <label for="titulo" class="form-label"></label>
                                    <input placeholder="Vaga disponivel" type="text" class="form-control" id="titulo" name="titulo" required>
                                </div>
                                <div class="mb-1">
                                    <label for="descricao" class="form-label"></label>
                                    <ul>
                                        <li>
                                            <input placeholder="Adicione as responsabilidades da vaga:" class="form-control" id="descricao" name="descricao" required></input>
                                        </li>
                                        <li>
                                            <input placeholder="Adicione as responsabilidades da vaga:" class="form-control" id="descricao01" name="descricao01" required></input>
                                        </li>
                                        <li>
                                            <input placeholder="Adicione as responsabilidades da vaga:" class="form-control" id="descricao02" name="descricao02" required></input>
                                        </li>
                                        <li>
                                            <input placeholder="Adicione as responsabilidades da vaga:" class="form-control" id="descricao03" name="descricao03" required></input>
                                        </li>
                                        <li>
                                            <input placeholder="Adicione as responsabilidades da vaga:" class="form-control" id="descricao04" name="descricao04" required></input>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mb-1">
                                    <label for="requisitos" class="form-label"></label>
                                    <ul>
                                        <li>
                                            <input placeholder="Adicione os Requisitos da vaga:" class="form-control" id="requisitos" name="requisitos" required></input>
                                        </li>
                                        <li>
                                            <input placeholder="Adicione os Requisitos da vaga:" class="form-control" id="requisito01" name="requisitos01" required></input>
                                        </li>
                                        <li>
                                            <input placeholder="Adicione os Requisitos da vaga:" class="form-control" id="requisitos02" name="requisitos02" required></input>
                                        </li>
                                        <li>
                                            <input placeholder="Adicione os Requisitos da vaga:" class="form-control" id="requisitos03" name="requisitos03" required></input>
                                        </li>
                                        <li>
                                            <input placeholder="Adicione os Requisitos da vaga:" class="form-control" id="requisitos04" name="requisitos04" required></input>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mb-2">
                                    <label for="beneficios" class="form-label"></label>
                                    <ul>
                                        <li>
                                            <input placeholder="Adicione os oferecemos da vaga:" class="form-control" id="beneficios" name="beneficios" required></input>
                                        </li>
                                        <li>
                                            <input placeholder="Adicione os oferecemos da vaga:" class="form-control" id="beneficios" name="beneficios" required></input>
                                        </li>
                                        <li>
                                            <input placeholder="Adicione os oferecemos da vaga:" class="form-control" id="beneficios" name="beneficios" required></input>
                                        </li>
                                        <li>
                                            <input placeholder="Adicione os oferecemos da vaga:" class="form-control" id="beneficios" name="beneficios" required></input>
                                        </li>
                                        <li>
                                            <input placeholder="Adicione os oferecemos da vaga:" class="form-control" id="beneficios" name="beneficios" required></input>
                                        </li>
                                    </ul>
                                </div>
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </form>
                    </div>
                </main>
            <!--Main-->
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('jobForm').addEventListener('submit', function (e) {
        e.preventDefault(); // Evita o envio normal do formulário

        const formData = new FormData(this);

        fetch(this.action, {
            method: this.method,
            body: formData,
        })
        .then(() => {
            // Mensagem de sucesso
            Swal.fire({
                icon: 'success',
                title: 'Sucesso!',
                text: 'A vaga foi salva com sucesso!',
            }).then(() => {
                location.reload(); // Recarrega a página após confirmação
            });
        })
        .catch(() => {
            // Mensagem genérica de erro em caso de falha (opcional)
            Swal.fire({
                icon: 'error',
                title: 'Erro!',
                text: 'Algo deu errado. Tente novamente.',
            });
        });
    });
</script>
</html>