<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $imagem = $_FILES['imagem']['name'];

    $caminhoImagem = "../assets/img/" . $imagem;
    move_uploaded_file($_FILES['imagem']['tmp_name'], $caminhoImagem);

    $linha = "$nome|$quantidade|$imagem\n";
    file_put_contents("../data/inventario.txt", $linha, FILE_APPEND);

    header("Location: inventario.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Item - Inventário Minecraft</title>
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
            background: url('../assets/img/cadastro.gif') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: rgba(0, 0, 0, 0.85);
            border: 4px solid #555;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            color: #fff;
            width: 400px;
            box-shadow: 0 0 20px #000;
        }

        .form-container h2 {
            margin-bottom: 20px;
            font-size: 26px;
            color: #00ff00;
        }

        .form-container label {
            display: block;
            margin: 10px 0 5px;
            text-align: left;
        }

        .form-container input[type="text"],
        .form-container input[type="number"],
        .form-container input[type="file"] {
            width: 100%;
            padding: 8px;
            border: 2px solid #333;
            background-color: #111;
            color: #fff;
            font-family: 'Minecraft', sans-serif;
        }

        .form-container button {
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

        .form-container button:hover {
            background-color: #32CD32;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Cadastrar Item</h2>
        <form method="POST" enctype="multipart/form-data">
            <label>Nome do Item:</label>
            <input type="text" name="nome" required>

            <label>Quantidade:</label>
            <input type="number" name="quantidade" required>

            <label>Imagem do Item:</label>
            <input type="file" name="imagem" accept="image/*" required>

            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>
