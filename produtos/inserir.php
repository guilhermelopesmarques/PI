<?php
include "../includes/conexao.php";


$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$categoria = $_POST["categoria"];
$marca = $_POST["marca"];
$preco = $_POST["preco"];
$sql = "insert into produtos(nome,descricao,categoria,marca, preco) values('$nome','$descricao','$categoria','$marca',$preco)";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar.php");
?>