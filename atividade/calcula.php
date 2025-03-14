<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações Matemáticas</title>
</head>
<body>

<h1>Operações Matemáticas</h1>

<form method="post">
    <label for="num1">Digite o primeiro número:</label>
    <input type="number" id="num1" name="num1" required>
    <br><br>
    <label for="num2">Digite o segundo número:</label>
    <input type="number" id="num2" name="num2" required>
    <br><br>
    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $soma = $num1 + $num2;
    $subtracao = $num1 - $num2;
    $multiplicacao = $num1 * $num2;
    if ($num2 != 0) {
        $divisao = $num1 / $num2;
    } else {
        $divisao = 'Indefinido (não pode dividir por zero)';
    }

    echo "<h2>Resultados:</h2>";
    echo "<p><strong>Soma:</strong> $num1 + $num2 = $soma (Tipo: " . gettype($soma) . ")</p>";
    echo "<p><strong>Subtração:</strong> $num1 - $num2 = $subtracao (Tipo: " . gettype($subtracao) . ")</p>";
    echo "<p><strong>Multiplicação:</strong> $num1 * $num2 = $multiplicacao (Tipo: " . gettype($multiplicacao) . ")</p>";
    echo "<p><strong>Divisão:</strong> $num1 / $num2 = $divisao (Tipo: " . gettype($divisao) . ")</p>";
}
?>

</body>
</html>