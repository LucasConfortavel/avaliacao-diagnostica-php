<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de E-mail</title>
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

        .content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        input[type="email"] {
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
        }

        .valid {
            background-color: #d4edda;
            color: #155724;
        }

        .invalid {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>

    <h1>Validação de E-mail</h1>

    <form method="post" action="">
        <label for="email">Digite seu e-mail:</label><br>
        <input type="email" id="email" name="email" required>
        <input type="submit" value="Validar">
    </form>

    <?php
    function validarEmail($email) {
        if (strpos($email, '@') !== false && strpos($email, '.') !== false) {
            return true;
        } else {
            return false;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        
        if (validarEmail($email)) {
            echo '<div class="message valid">E-mail válido: ' . htmlspecialchars($email) . '</div>';
        } else {
            echo '<div class="message invalid">E-mail inválido. Certifique-se de que contém "@" e ".".</div>';
        }
    }
    ?>

</body>
</html>
