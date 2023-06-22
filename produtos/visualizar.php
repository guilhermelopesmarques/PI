<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
$id = $_GET["id"];

$nome = "";
$descricao = "";
$categoria = "";
$marca = "";
$preco = "";
$sql = "select * from produtos where id = $id";
$todos_os_produtos = mysqli_query($conexao, $sql);
while($um_produto = mysqli_fetch_assoc($todos_os_produtos)):
$nome = $um_produto["nome"];
$descricao = $um_produto["descricao"];
$categoria = $um_produto["categoria"];
$marca = $um_produto["marca"];
$preco = $um_produto["preco"];
endwhile;
?>
<h1>Ficha Do Produto</h1>
Nome: <?php echo $nome ; ?><br>
Descrição: <?php echo $descricao ; ?><br>
Categoria: <?php echo $categoria ; ?><br>
Marca: <?php echo $marca ; ?><br>
Preço: <?php echo $preco ; ?><br>

<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>