<?php
include "includes/cabecalho.php";
?>
    <form method="post" action="validar.php">
        <input name="usuario" type="email" placeholder="e-mail" required>
        <input name="senha" type="password" placeholder="senha" required maxlength="20">
        <button type="submit">Acessar Sistema</button>
    </form>

    <?php
include "includes/rodape.php";
?>
