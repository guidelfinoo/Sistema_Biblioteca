<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf= $_POST['cpf'];
$telefone = $_POST['telefone'];
$data = $_POST['data'];
$cep = $_POST['cep'];

//echo "Parabéns! ";
//echo "senhor (a) ", $nome;
//echo ". Seu cadastro foi realizado com sucesso!";
include "conexao.php";

$sql = "INSERT INTO `cliente`(`nome`, `email`, `cpf`, `telefone`, `data_nasc`, `cep`)
VALUES ('$nome', '$email', '$cpf', '$telefone', '$data', '$cep')";

if (mysqli_query($con, $sql)){
    echo "Cadastro realizado com sucesso!";
    echo "<br> <a href='cadastro.html'>Voltar</a>";
} else {
    echo "Erro no cadastro!";
}
