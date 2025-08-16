<!--Vagas-->
    <?php
    include 'db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $descricao01 = $_POST['descricao01'];
        $descricao02 = $_POST['descricao02'];
        $descricao03 = $_POST['descricao03'];
        $descricao04 = $_POST['descricao04'];
        $requisitos = $_POST['requisitos'];
        $beneficios = $_POST['beneficios'];

        $sql = "INSERT INTO vagas (titulo, descricao, requisitos, beneficios) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$titulo, $descricao, $requisitos, $beneficios]);

        header('Location: ../vaga.php');
    }
    ?>
<!--Vagas-->
