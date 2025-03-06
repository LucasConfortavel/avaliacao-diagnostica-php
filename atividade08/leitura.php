<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leitura e Escrita de Arquivo</title>
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

        .message {
            font-style: italic;
            color: #777;
        }

        pre {
            background-color: #e9e9e9;
            padding: 10px;
            border-radius: 4px;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
    </style>
</head>
<body>
    <h1>Leitura e Escrita de Arquivo</h1>
    
    <?php
    $arquivo = 'notas.txt';
    
    if (file_exists($arquivo)) {
        $conteudo = file_get_contents($arquivo);
        
        echo "<div class='content'><h2>Conteúdo Atual do Arquivo:</h2><pre>" . htmlspecialchars($conteudo) . "</pre></div>";
        
        file_put_contents($arquivo, "\nFinal do conteúdo", FILE_APPEND);
        
        echo "<div class='message'>Texto 'Final do conteúdo' foi adicionado ao final do arquivo.</div>";
    } else {
        echo "<div class='message'>Arquivo 'notas.txt' não encontrado.</div>";
    }
    ?>
    
</body>
</html>
