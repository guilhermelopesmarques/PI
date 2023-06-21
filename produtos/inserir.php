<?php
include "../includes/conexao.php";


$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$categoria = $_POST["categoria"];
$sql = "insert into produtos(nome,descricao,categoria) values('$nome','$descricao','$categoria')";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar.php");
?>