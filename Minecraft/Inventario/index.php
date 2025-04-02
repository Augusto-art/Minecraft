<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início - Minecraft Inventário</title>
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
            background: url('../assets/img/minecraft.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.85);
            border: 4px solid #555;
            border-radius: 12px;
            padding: 40px;
            text-align: center;
            color: #fff;
            width: 400px;
            box-shadow: 0 0 20px #000;
        }

        .container h1 {
            margin-bottom: 25px;
            font-size: 28px;
            color: #00ff00;
        }

        .container a {
            display: inline-block;
            margin: 10px 20px;
            padding: 10px 25px;
            background-color: #228B22;
            border: 2px solid #0f4;
            color: #fff;
            font-family: 'Minecraft', sans-serif;
            font-size: 16px;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .container a:hover {
            background-color: #32CD32;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bem-vindo ao Inventário Minecraft</h1>
        <a href="../pages/login.php">Login</a>
        <a href="../pages/cadastro.php">Cadastro</a>
    </div>
</body>
</html>
