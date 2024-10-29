<?php

$isbn = $_POST['isbn'];
$livro = $_POST['livro'];
$genero = $_POST['genero'];
$classificacao = $_POST['idade'];
$autor = $_POST['autor'];
$data = $_POST['data'];
$qtd = $_POST['qtd'];
$disp = $_POST['disp'];

//echo "Parabéns! ";
//echo "senhor (a) ", $nome;
//echo ". O cadastro do seu livro foi realizado com sucesso!";
include "conexao.php";

$sql = "INSERT INTO `livros`(`isbn`, `nome_livro`, `genero`, `classificacao_idade`, `autor`,`publicacao`, `quant_exemplares`, `disponibilidade`)
VALUES ('$isbn', '$livro', '$genero', '$classificacao', '$autor', '$data', '$qtd', '$disp')";

if (mysqli_query($con, $sql)){
    echo "Livro cadastrado com sucesso!";
    echo "<br> <a href='catalogo.html'>Voltar</a>";
} else {
    echo "Erro no cadastro!";
}
