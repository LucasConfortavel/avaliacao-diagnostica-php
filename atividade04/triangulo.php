<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Área do Retângulo</title>
</head>
<body>
    <h1>Calcule a Área do Retângulo</h1>

    <form method="POST" action="">
        <label for="comprimento">Comprimento:</label>
        <input type="number" name="comprimento" id="comprimento" required step="any"><br><br>
        
        <label for="largura">Largura:</label>
        <input type="number" name="largura" id="largura" required step="any"><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $comprimento = $_POST['comprimento'];
        $largura = $_POST['largura'];

        function calcular_area($comprimento, $largura) {
            return $comprimento * $largura;
        }

        $area = calcular_area($comprimento, $largura);

        echo "<h2>A área do retângulo é: " . number_format($area, 2) . " unidades quadradas.</h2>";
    }
    ?>
    
</body>
</html>