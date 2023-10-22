<?php
if (isset($_POST['login']) && isset($_POST['senha'])) {
    // Obtenha os valores de login e senha do POST
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    // Verifique o login no banco de dados
    $loginExiste = verificarLoginNoBanco($login, $senha);

    // Retorne a resposta como JSON
    echo json_encode(["loginExiste" => $loginExiste]);
} else {
    // Caso os dados do POST não estejam presentes, retorne uma resposta com "loginExiste" definido como falso
    echo json_encode(["loginExiste" => false]);
}

function verificarLoginNoBanco($login, $senha) {
    include_once ('../conexaoControler/conexao.php');
    $verificaçãoDaConexão = "SELECT * FROM usuarios WHERE Nome='$login' AND Senha='$senha'";
    $result = $mysqli->query($verificaçãoDaConexão);

    // Verifique se há alguma linha correspondente no banco de dados
    if ($result->num_rows > 0) {
        return true; // O login existe no banco de dados
    } else {
        return false; // O login não existe no banco de dados
    }
}
?>



