<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$rg = mysqli_real_escape_string($conexao, trim($_POST['rg']));
$cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
$sexo = mysqli_real_escape_string($conexao, trim($_POST['sexo']));
$email = mysqli_real_escape_string($conexao, trim($_POST['cemail']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['ctel']));
$celular = mysqli_real_escape_string($conexao, trim($_POST['ccel']));
$data_de_nascimento = mysqli_real_escape_string($conexao, trim($_POST['dtnasc']));
$rua = mysqli_real_escape_string($conexao, trim($_POST['erua']));
$numero = mysqli_real_escape_string($conexao, trim($_POST['enumero']));
$bairro = mysqli_real_escape_string($conexao, trim($_POST['ebairro']));
$cep = mysqli_real_escape_string($conexao, trim($_POST['ecep']));

$sql = "INSERT INTO clientes (nome, rg, cpf, sexo, email, telefone, celular, dt_nasc, rua, num_end, bairro, cep) VALUES ('$nome', '$rg', '$cpf','$sexo','$email','$telefone','$celular','$data_de_nascimento','$rua','$numero','$bairro','$cep')";
$result = mysqli_query($conexao, $sql);


if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
	header('Location: cadastro.php');
}

$conexao->close();

echo('deu ruim');
?>