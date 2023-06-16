<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
?>
<h1>Módulo de Clientes</h1>
<p>
    <a href="novo.php">Adicionar Aluno</a>
</p>
<h2>Listagem de Clientes</h2>
<table class="table table-bordered">
    <tr class="table-secondary text-center fw-bold">
        <td>Código</td>
        <td>Nome</td>
        <td>Senha</td>
        <td>E-mail</td>
        <td>Telefone</td>
        <td>Rua</td>
        <td>Bairro</td>
        <td>Cidade</td>
        <td>Ações</td>
    </tr>
    <?php
    $sql = "select * from usuario";
    $todos_os_clientes = mysqli_query($conexao, $sql);
    while($um_cliente = mysqli_fetch_assoc($todos_os_clientes)):
    ?>
        <tr>
            <td><?php echo $um_cliente['id'];?></td>
            <td><?php echo $um_cliente['nome'];?></td>
            <td><?php echo $um_cliente['senha'];?></td>
            <td><?php echo $um_cliente['email'];?></td>
            <td><?php echo $um_cliente['telefone'];?></td>
            <td><?php echo $um_cliente['rua'];?></td>
        <td><?php echo $um_cliente['bairro'];?></td>
        
        <td><?php echo $um_cliente['cidade'];?></td>
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