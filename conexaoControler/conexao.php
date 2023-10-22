<?php
$hostname = "localhost";        // Endereço do servidor MySQL (normalmente localhost para ambiente local)
$username = "root";      // Nome de usuário do MySQL
$password = "";        // Senha do MySQL
$database = "db_kethi_tattoo"; // Nome do banco de dados

// Cria a conexão
$mysqli = new mysqli($hostname, $username, $password, $database);

// Verifica a conexão
if ($mysqli->connect_error) {
    die("Erro de conexão: " . $mysqli->connect_error);
}

// Agora você pode executar consultas no banco de dados usando $mysqli
// Por exemplo:
$query = "SELECT * FROM usuarios";
$result = $mysqli->query($query);


// Feche a conexão quando terminar

?>
