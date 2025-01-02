<?php
include_once('../conexao/testeconexao.php');
// Verificar conexão
if ($conexao->connect_error) {
    die(json_encode(["success" => false, "message" => "Conexão falhou: " . $conexao->connect_error]));
}

$data = json_decode(file_get_contents('php://input'), true);

$id = $conexao->real_escape_string($data['id']);
$nome = $conexao->real_escape_string($data['nome']);
$email = $conexao->real_escape_string($data['email']);
$senha = $conexao->real_escape_string($data['senha']);
$telefone = $conexao->real_escape_string($data['telefone']);
$dtnasci = $conexao->real_escape_string($data['dtnasci']);

$sql = "UPDATE usuario SET nome='$nome', email='$email', senha='$senha', telefone ='$telefone', dtnasci ='$dtnasci' WHERE id='$id'";

if ($conexao->query($sql) === TRUE) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "message" => $conexao->error]);
}

$conexao->close();
?>