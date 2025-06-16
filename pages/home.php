<?php
    session_start(); //iniciar uma sessao ou restaurar uma sessao ja existente.

    if (!isset($_SESSION['user'])) {
        header("Location: login.php");
        exit();
    }

    $username = htmlspecialchars($_SESSION['user']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Usuário</title>
    <link rel="stylesheet" href="../style/home.css">
</head>
<body>
    <div class="painel">
        <h1>Olá, <?= $username ?>!</h1>
        <p>Você está logado com sucesso.</p>
        <a href="../php/logout.php" class="botaoLogout">Sair</a>
    </div>
</body>
</html>
