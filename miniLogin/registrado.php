<?php
session_start();
    if(!isset($_SESSION['logado']) or $_SESSION['logado'] !== true){
        header('Location:login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo(a) à Área do Cliente</title>
    <link rel="stylesheet" href="css/telaLogada.css">
</head>
<body>
    <div class="container">
        <h1>Bem-vindo(a), Cliente!</h1>
        <p>Seu login foi efetuado com sucesso.</p>
        <p>O que você gostaria de fazer agora?</p>
        <nav>
            <ul>
                <li><a href="#">Meu Perfil</a></li>
                <li><a href="#">Meus Pedidos</a></li>
                <li><a href="#">Configurações</a></li>
                <li><a href="logout.php" class="logout">Sair</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>
