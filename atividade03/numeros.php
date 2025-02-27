<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop de 1 a 100</title>
</head>
<body>
    <h1>Contador com Substituições (Divisível por 3, 5 e ambos)</h1>
    <ul>
        <?php
        for ($i = 1; $i <= 100; $i++) {

            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "<li>AB</li>";
            }

            elseif ($i % 3 == 0) {
                echo "<li>A</li>";
            }

            elseif ($i % 5 == 0) {
                echo "<li>B</li>";
            }

            else {
                echo "<li>$i</li>";
            }
        }
        ?>

</body>
</html>