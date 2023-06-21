<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
?>
<h1>Novo Produto</h1>
<p>Vamos Cadastrar Um Produto Novo No Sistema.</p>
<form action="inserir.php" method="post">
    Nome: <input name="nome" required maxlength="50">
    <br>
    descricao: <input name="descricao" required maxlength="100">
    <br>
    categoria: <input name="categoria" required maxlength="100">
    
    <button type="submit">Salvar</button>
</form>

<?php
include "../includes/rodape.php";
?>