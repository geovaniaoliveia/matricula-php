<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<h2>Matricula #<?=$contato['id']?> </h2>
<hr>
<form action="" method='post'>
    <input type="hidden" name='id' value='<?=$contato['id']?>'>
    <label>Nome:</label>
    <input type="text" name='nome' value='<?=$contato['nome']?>' required>
    <label>Nome do Responsavel:</label>
    <input type="text" name='nomeResp' value='<?=$contato['nomeResp']?>' required>
    <label>Idade:</label>
    <input type="number" name='idade' value='<?=$contato['idade']?>' required>
    <label>E-mail:</label>
    <input type="text" name='email' value='<?=$contato['email']?>'required>
    <label>Nis:</label>
    <input type="number" name='nis' value='<?=$contato['nis']?>' required>
    <label>Rg:</label>
    <input type="number" name='rg' value='<?=$contato['rg']?>' required>
    <button type="submit" name='atualiza'>
        atualizar
    </button>  
    <button type="submit" name= 'exclui'>
        Excluir
    </button>
</form>
</body>
</html>