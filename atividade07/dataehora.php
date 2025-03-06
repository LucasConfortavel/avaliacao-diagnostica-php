<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Atual</title>
</head>
<body>
    <h1>Data Atual no Formato Específico</h1>
    
    <?php
    setlocale(LC_TIME, 'pt_BR.utf8');

    $dataAtual = strftime("%A, %d de %B de %Y");

    echo "<p><strong>Data Atual:</strong> " . $dataAtual . "</p>";
    ?>

</body>
</html>
