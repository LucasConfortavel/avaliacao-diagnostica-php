<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Nome e Idade</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f9;
            color: #333;
        }

        h1 {
            color: #2d2d2d;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            max-width: 400px;
            margin: 0 auto;
        }

        input[type="text"], input[type="number"] {
            padding: 8px;
            font-size: 16px;
            margin-bottom: 10px;
            width: 100%;
            max-width: 300px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .message {
            font-weight: bold;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            background-color: #e9f7e9;
            color: #2e7d32;
            text-align: center;
        }
    </style>
</head>
<body>

    <h1>Formulário de Nome e Idade</h1>

    <div class="form-container">
        <form method="post" action="">
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" required><br><br>
            
            <label for="idade">Idade:</label><br>
            <input type="number" id="idade" name="idade" required><br><br>
            
            <input type="submit" value="Enviar">
        </form>
    </div>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

        echo "<div class='message'>Olá, $nome! Você tem $idade anos.</div>";
    }
    ?>

</body>
</html>
