<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <center>
<img src="img/icon.png" alt="xadres" width="150" ></center>
    <form class="text-center" method="post" action="validar.php">
        <input name="usuario" type="email" placeholder="e-mail" required>
        <input name="senha" type="password" placeholder="senha" required maxlength="20">
        <button type="submit"
        class="btn btn-outline-primary">Acessar Sistema</button>
    </form>

    <footer>
    <p style="text-align: center;">
       &copy; Todos os Direitos Reservados. Criado Por <a href="mailto;ggguicamaro@gmail.com">Guilherme</a>
    </p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
