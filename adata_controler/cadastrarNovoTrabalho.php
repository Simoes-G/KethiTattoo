<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $tamanho = $_POST['tamanho'];
    $estilo = $_POST['estilo'];
    $preco = $_POST['preco'];

    

    // Manipule os campos acima, como inserir no banco de dados

    // Manipule o upload da imagem
    if (isset($_FILES['imagem'])) {
        
        $uploadDir = '../images/'; // Diretório onde a imagem será armazenada
        $uploadedFile = $uploadDir . basename($_FILES['imagem']['name']);

        if (move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadedFile)) {
            // O upload da imagem foi bem-sucedido, você pode registrar o caminho no banco de dados se necessário
            include_once('../conexaoControler/conexao.php');
            $verificaçãoDaConexão = "INSERT INTO postagens (`ID`, `Tamanho`, `Estilo`, `Valor`, `Nome`, `Descricao`, `AdministradorID`, `caminho`) VALUES (NULL, '$tamanho', '$estilo', '$preco', '$titulo', '$descricao', '1', '$uploadedFile')";
            $result = $mysqli->query($verificaçãoDaConexão);
            echo json_encode(['imagemCadastrada' => true]);
            exit;
        } else {
            echo json_encode(['imagemCadastrada' => false, 'message' => 'Erro ao fazer upload da imagem.']);
            exit;
        }
    }
    
    echo json_encode(['imagemCadastrada' => true]);
    exit;
} else {
    echo json_encode(['imagemCadastrada' => false, 'message' => 'Requisição inválida.']);
}
?>





