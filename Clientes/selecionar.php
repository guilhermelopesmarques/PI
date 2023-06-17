<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
?>
<h1>Módulo de Produtos</h1>
<p>
    <a href="novo.php">Adicionar produtos</a>
</p>
<h2>Listagem de Produtos</h2>
<table class="table table-bordered">
    <tr class="table-secondary text-center fw-bold">
        <td>ID</td>
        <td>Nome</td>
        <td>Descrição</td>
        <td>Categoria</td>
        <td>Marca</td>
        <td>Preço</td>
        <td>ID Produtos</td>

    </tr>
    <?php
    $sql = "select * from produto";
    $todos_os_produtos = mysqli_query($conexao, $sql);
    while($um_produtos = mysqli_fetch_assoc($todos_os_produtos)):
    ?>
        <tr>
            <td><?php echo $um_produtos['id'];?></td>
            <td><?php echo $um_produtos['nome'];?></td>
            <td><?php echo $um_produtos['descricao'];?></td>
            <td><?php echo $um_produtos['categoria'];?></td>
            <td><?php echo $um_produtos['marca'];?></td>
            <td><?php echo $um_produtos['preco'];?></td>
            <td><?php echo $um_produtos['id_fornecedores'];?></td>

        <td>
            <a href="#" title="Ver Completo">Visualizar</a>
            <a href="#" title="Editar">Editar</a>
            <a href="#" title="Excluir Aluno">Excluir</a>
        </td>
        </tr>
        <?php
    endwhile;    
    ?>
</table>

<?php 
include "../includes/rodape.php"
?>