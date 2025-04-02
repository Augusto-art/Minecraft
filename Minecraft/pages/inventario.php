<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}

// Carregar itens do inventario.txt (1 slot por item com quantidade)
$itens = [];

if (file_exists('../data/inventario.txt')) {
    $linhas = file('../data/inventario.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $linhaAtual = 1;

    foreach ($linhas as $linha) {
        $partes = explode('|', $linha);
        if (count($partes) === 3) {
            list($nome, $quantidade, $imagem) = $partes;

            // Se exceder 36 slots, sobrescreve do início
            if ($linhaAtual > 36) {
                $linhaAtual = 1;
            }

            $itens[$linhaAtual] = [
                'nome' => $nome,
                'quantidade' => $quantidade,
                'imagem' => $imagem
            ];
            $linhaAtual++;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventário Minecraft</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body {
            background-color: #c6c6c6;
            font-family: 'Minecraft', sans-serif;
        }
        .container {
            max-width: 1000px;
            margin: 30px auto;
            padding: 20px;
            background-color: #d8d8d8;
            border: 4px solid #888;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .player-section {
            display: flex;
            align-items: center;
            gap: 40px;
        }
        .left-panel {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .equipamentos {
            display: grid;
            grid-template-columns: 1fr;
            gap: 8px;
        }
        .equip-slot, .inventory-slot, .hotbar-slot {
            width: 50px;
            height: 50px;
            border: 2px solid #444;
            background-color: #eee;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        .equip-slot img, .inventory-slot img, .hotbar-slot img {
            max-width: 100%;
            max-height: 100%;
        }
        .quantidade {
            position: absolute;
            bottom: 0;
            right: 2px;
            font-size: 12px;
            font-weight: bold;
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 1px 4px;
            border-radius: 4px;
        }
        .avatar-area img {
            width: 250px;
            height: 280px;
            background-color: #000;
            border: 3px solid #555;
        }
        .crafting-area {
            display: flex;
            align-items: center;
            gap: 30px;
        }
        .crafting-grid {
            display: grid;
            grid-template-columns: repeat(2, 50px);
            grid-template-rows: repeat(2, 50px);
            gap: 5px;
        }
        .arrow {
            font-size: 28px;
            margin: 0 10px;
        }
        .result-slot {
            width: 50px;
            height: 50px;
            border: 2px solid #444;
            background-color: #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .inventory-area {
            display: grid;
            grid-template-columns: repeat(9, 60px);
            grid-template-rows: repeat(3, 60px);
            gap: 5px;
            margin-top: 30px;
        }
        .hotbar-area {
            display: flex;
            gap: 5px;
            margin-top: 15px;
        }
        .btn-sair {
            margin-top: 20px;
            padding: 8px 20px;
            background-color: #a00;
            color: #fff;
            font-family: 'Minecraft', sans-serif;
            border: 2px solid #600;
            cursor: pointer;
        }
        .btn-sair:hover {
            background-color: #c00;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Inventário do Jogador</h2>

        <div class="player-section">
            <div class="left-panel">
                <div class="equipamentos">
                    <div class="equip-slot" title="Capacete"><img src="../assets/img/capacete.png" alt="Capacete"></div>
                    <div class="equip-slot" title="Peitoral"><img src="../assets/img/peitoral.png" alt="Peitoral"></div>
                    <div class="equip-slot" title="Calça"><img src="../assets/img/calca.png" alt="Calça"></div>
                    <div class="equip-slot" title="Bota"><img src="../assets/img/bota.png" alt="Bota"></div>
                </div>
                <div class="avatar-area">
                    <img src="../assets/img/avatar.png" alt="Avatar do Jogador">
                </div>
            </div>

            <div class="crafting-area">
                <div class="crafting-grid">
                    <div class="inventory-slot"></div>
                    <div class="inventory-slot"></div>
                    <div class="inventory-slot"></div>
                    <div class="inventory-slot"></div>
                </div>
                <div class="arrow">➡</div>
                <div class="result-slot"><img src="../assets/img/espada.png" alt="Espada"></div>
            </div>
        </div>

        <div class="inventory-area">
            <?php for ($i = 1; $i <= 27; $i++): ?>
                <div class="inventory-slot">
                    <?php if (isset($itens[$i])): ?>
                        <img src="../assets/img/<?php echo htmlspecialchars($itens[$i]['imagem']); ?>" alt="<?php echo htmlspecialchars($itens[$i]['nome']); ?>">
                        <?php if ((int)$itens[$i]['quantidade'] > 1): ?>
                            <span class="quantidade"><?php echo (int)$itens[$i]['quantidade']; ?></span>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endfor; ?>
        </div>

        <div class="hotbar-area">
            <?php for ($i = 28; $i <= 36; $i++): ?>
                <div class="hotbar-slot">
                    <?php if (isset($itens[$i])): ?>
                        <img src="../assets/img/<?php echo htmlspecialchars($itens[$i]['imagem']); ?>" alt="<?php echo htmlspecialchars($itens[$i]['nome']); ?>">
                        <?php if ((int)$itens[$i]['quantidade'] > 1): ?>
                            <span class="quantidade"><?php echo (int)$itens[$i]['quantidade']; ?></span>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endfor; ?>
        </div>

        <form action="../includes/logout.php" method="post">
            <button type="submit" class="btn-sair">Sair</button>
        </form>
    </div>
</body>
</html>