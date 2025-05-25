<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Mini-Login</title>
    <style>
    p {
        background-color: red;
        border-radius: 10px;
        color: white;
        width: 190px; 
        height: 20px;
        padding: 10px 0; 
        font-weight: bold;
        margin-left: auto;
        margin-right: auto;
        margin: 10px auto;
}</style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="POST"> <div class="input-group">
                <label for="username">Usuário</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="input-group">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" >
            </div>
            <button type="submit" class="login-button" onclick="">Entrar</button>
        </form>
        <?php 
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $username = htmlspecialchars($_POST["username"] ?? '');
            $password = htmlspecialchars($_POST["password"] ?? '');

            $_SESSION['logado'] = false;

            if($username == 'admin' && $password == 'admin'){
                $_SESSION['logado'] = true;
                header('Location:registrado.php');
                exit();
            }else{
                echo "<p>Acesso Negado</p>";
            }
        }
        ?>
    </div>
</body>
</html>