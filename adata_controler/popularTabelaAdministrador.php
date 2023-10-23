<?php
include_once('../conexaoControler/conexao.php');

$sql = "SELECT * FROM postagens";

$result = $mysqli->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}


// Retorna os dados em formato JSON
echo json_encode($data);



