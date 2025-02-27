<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop de 1 a 100</title>
</head>
<body>
    <h1>Numeros de 1 a 100</h1>
    <ul>
        <?php
        for ($i = 1; $i <= 100; $i++) {
            echo "<li>$i</li>";
        }
        ?>
    </ul>
</body>
</html>