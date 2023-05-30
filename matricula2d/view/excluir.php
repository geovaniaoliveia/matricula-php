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
<h2>Contato #<?=$contato['id']?></h2>
<hr>
<p>
    Tem certeza que deseja excluir está matricula?
</p>
<p>
    <form action="" method= 'get'>
        <button type="submit" value="<?=$contato['id']?>" name= 'sim'>
            SIM
        </button>
        <button type="submit" name = 'nao'>
            NÃO
        </button>
    </form>
</p>
</body>
</html>