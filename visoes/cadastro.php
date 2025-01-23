<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charser="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h3>Cadastro de Usuário</h3>
    <form action="../controladores/UsuarioControlador.php" method="post">
        <p>Nome: <input type="text" id="nome" name="nome" required></p>
        <p>Email: <input type="email" id="email" name="email" required></p>
        <p>Senha: <input type="password" id="senha" name="senha" required></p>
        <button type="submit" name="acao" value="cadastrar">cadastrar</button>
    </form>
    <p>Já possui conta ?  <a href="login.php"> Faça Login Aqui</a></p>
</body>
</html>