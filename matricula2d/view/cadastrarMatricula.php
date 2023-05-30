<!DOCTYPE html>
<html>
<head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário de Matrícula</title>
</head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .button-container {
            text-align: center;
        }

        .button-container button {
            padding: 10px 20px;
            font-size: 14px;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }

        .button-container button.edit {
            background-color: #2196F3;
        }

        .button-container button.delete {
            background-color: #F44336;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Formulário de Matrícula</h2>

    <form method="post" action="">
        <label for="nome">Nome completo:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="responsaveis">Nome dos responsáveis:</label>
        <input type="text" id="responsaveis" name="nomeResp" required>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="nis">NIS:</label>
        <input type="number" id="nis" name="nis" required>

        <label for="rg">RG:</label>
        <input type="number" id="rg" name="rg" required>

        <div class="button-container">
            <button type="submit" name="cadastrar">Cadastrar</button>
        </div>
    </form>
    <hr>
<?php if(isset($listaContatos)) : ?>
    <?php foreach($listaContatos as $c) : ?>
        <p>
            <p>Dados do id <a href="?id=<?=$c['id']?>">
                <?= $c['id']?>:<p>
            </a>
            Nome: <?= $c['nome']?><br>
            Responsavel: <?= $c['nomeResp']?><br>
            Idade: <?= $c['idade']?><br>
            Email: <?= $c['email']?><br>
            Nis: <?= $c['nis']?><br>
            Rg: <?= $c['rg']?>
        </p>
    <?php endforeach ?>
<?php else : ?>
    <p> Sem matricula existente</p>
<?php endif ?>
</body>
</html>