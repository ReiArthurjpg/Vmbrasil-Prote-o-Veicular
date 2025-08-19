<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo       = $_POST['titulo'];
    $descricao    = $_POST['descricao'];
    $requisitos   = $_POST['requisitos'];
    $beneficios   = $_POST['beneficios'];
    $descricao01  = $_POST['descricao01'];
    $descricao02  = $_POST['descricao02'];
    $descricao03  = $_POST['descricao03'];
    $descricao04  = $_POST['descricao04'];
    $requisitos01 = $_POST['requisitos01'];
    $requisitos02 = $_POST['requisitos02'];
    $requisitos03 = $_POST['requisitos03'];
    $requisitos04 = $_POST['requisitos04'];
    $beneficios01 = $_POST['beneficios01'];
    $beneficios02 = $_POST['beneficios02'];
    $beneficios03 = $_POST['beneficios03'];
    $beneficios04 = $_POST['beneficios04'];

    $sql = "INSERT INTO vagas 
        (titulo, descricao, requisitos, beneficios, 
         descricao01, descricao02, descricao03, descricao04, 
         requisitos01, requisitos02, requisitos03, requisitos04, 
         beneficios01, beneficios02, beneficios03, beneficios04)
        VALUES 
        ('$titulo', '$descricao', '$requisitos', '$beneficios',
         '$descricao01', '$descricao02', '$descricao03', '$descricao04',
         '$requisitos01', '$requisitos02', '$requisitos03', '$requisitos04',
         '$beneficios01', '$beneficios02', '$beneficios03', '$beneficios04')";

    if ($conn->query($sql)) {
    header("Location: ../vaga.php?msg=sucesso");
    exit;
        } else {
            $errorInfo = $conn->errorInfo();
            echo "Erro: " . $errorInfo[2];
        }

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Vaga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-4">
    <h2 class="mb-4">➕ Adicionar Vaga</h2>

    <form method="POST" class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Título</label>
            <input type="text" name="titulo" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Descrição</label>
            <input type="text" name="descricao" class="form-control">
        </div>
        <div class="col-md-6">
            <label class="form-label">Requisitos</label>
            <input type="text" name="requisitos" class="form-control">
        </div>
        <div class="col-md-6">
            <label class="form-label">Benefícios</label>
            <input type="text" name="beneficios" class="form-control">
        </div>

        <h5 class="mt-4">Descrições Extras</h5>
        <?php for ($i=1; $i<=4; $i++): ?>
            <div class="col-md-6">
                <label class="form-label">Descrição0<?= $i ?></label>
                <input type="text" name="descricao0<?= $i ?>" class="form-control">
            </div>
        <?php endfor; ?>

        <h5 class="mt-4">Requisitos Extras</h5>
        <?php for ($i=1; $i<=4; $i++): ?>
            <div class="col-md-6">
                <label class="form-label">Requisitos0<?= $i ?></label>
                <input type="text" name="requisitos0<?= $i ?>" class="form-control">
            </div>
        <?php endfor; ?>

        <h5 class="mt-4">Benefícios Extras</h5>
        <?php for ($i=1; $i<=4; $i++): ?>
            <div class="col-md-6">
                <label class="form-label">Benefícios0<?= $i ?></label>
                <input type="text" name="beneficios0<?= $i ?>" class="form-control">
            </div>
        <?php endfor; ?>

        <div class="col-12">
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="../vaga.php" class="btn btn-secondary">Voltar</a>
        </div>
    </form>
</div>

</body>
</html>
