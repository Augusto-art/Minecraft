<?php
session_start();

$usuario_padrao = "Tokita";
$senha_padrao = "beta";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if ($usuario === $usuario_padrao && $senha === $senha_padrao) {
        $_SESSION["usuario"] = $usuario;
        header("Location: ../pages/inventario.php"); // Redireciona pro inventário
        exit();
    } else {
        $erro = "Usuário ou senha inválidos.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Minecraft</title> <!-- Título da aba -->
    <link rel="stylesheet" href="../css/style.css">
    <style>
        @font-face {
            font-family: 'Minecraft';
            src: url('../assets/fonts/Minecraft.ttf') format('truetype');
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Minecraft', sans-serif;
            background: url('../assets/img/login.gif') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background-color: rgba(0, 0, 0, 0.8);
            border: 4px solid #555;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            color: #fff;
            width: 350px;
            box-shadow: 0 0 20px #000;
        }

        .login-box h2 {
            margin-bottom: 20px;
            font-size: 26px;
            color: #00ff00;
        }

        .login-box label {
            display: block;
            margin: 10px 0 5px;
            text-align: left;
        }

        .login-box input {
            width: 100%;
            padding: 8px;
            border: 2px solid #333;
            background-color: #111;
            color: #fff;
            font-family: 'Minecraft', sans-serif;
        }

        .login-box button {
            margin-top: 15px;
            width: 100%;
            padding: 10px;
            background-color: #228B22;
            border: 2px solid #0f4;
            color: #fff;
            font-family: 'Minecraft', sans-serif;
            font-size: 16px;
            cursor: pointer;
        }

        .login-box button:hover {
            background-color: #32CD32;
        }

        .erro {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Minecraft</h2> <!-- Cabeçalho principal -->
        <?php if (isset($erro)) echo "<p class='erro'>$erro</p>"; ?>
        <form method="POST">
            <label>Usuário:</label>
            <input type="text" name="usuario" required>
            <label>Senha:</label>
            <input type="password" name="senha" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>


