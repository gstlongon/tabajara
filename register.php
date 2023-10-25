<?php
require("php/config.php");

$data = json_decode(file_get_contents('php://input'));

if (!$data) {
    $msg = array("codigo" => 0, "texto" => "Dados inválidos.");
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($msg);
    exit;
}

$cnpj = $data->cnpj;
$nomeFantasia = $data->nome_fantasia;
$razaoSocial = $data->razao_social;
$user = $data->user;
$senha = $data->senha;
$email = $data->email;
$telefone = $data->telefone;
$cep = $data->cep;
$endRua = $data->end_rua;
$endNumero = $data->end_numero;
$endComplemento = $data->end_complemento;
$endBairro = $data->end_bairro;
$endCidade = $data->end_cidade;
$endEstado = $data->end_estado;

$sql = "INSERT INTO administrador (cnpj, nome_fantasia, razao_social, usuario, senha, email, telefone, endereco_cep, endereco_rua, endereco_numero, endereco_complemento, endereco_bairro, endereco_cidade, endereco_estado)
        VALUES (:cnpj, :nomeFantasia, :razaoSocial, :user, :senha, :email, :telefone, :cep, :endRua, :endNumero, :endComplemento, :endBairro, :endCidade, :endEstado)";

try {
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':cnpj', $cnpj);
    $stmt->bindParam(':nomeFantasia', $nomeFantasia);
    $stmt->bindParam(':razaoSocial', $razaoSocial);
    $stmt->bindParam(':user', $user);
    $stmt->bindParam(':senha', $senha);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':cep', $cep);
    $stmt->bindParam(':endRua', $endRua);
    $stmt->bindParam(':endNumero', $endNumero);
    $stmt->bindParam(':endComplemento', $endComplemento);
    $stmt->bindParam(':endBairro', $endBairro);
    $stmt->bindParam(':endCidade', $endCidade);
    $stmt->bindParam(':endEstado', $endEstado);

    $stmt->execute();

    $msg = array("codigo" => 1, "texto" => "Registro inserido com sucesso.");
} catch (PDOException $e) {
    $msg = array("codigo" => 0, "texto" => "Erro ao inserir: " . $e->getMessage());
}

header('Content-Type: application/json; charset=utf-8');
echo json_encode($msg);
?>
