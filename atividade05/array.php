<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência de Fibonacci</title>
</head>
<body>
    <h1>Os 10 primeiros números da sequência de Fibonacci</h1>
    
    <?php
    function fibonacci($n) {
        $fibonacci = [0, 1]; 
        
        for ($i = 2; $i < $n; $i++) {
            $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2]; 
        }
        
        return $fibonacci;
    }
    
    $fibonacciArray = fibonacci(10);
    
    echo "<ul>";
    foreach ($fibonacciArray as $numero) {
        echo "<li>" . $numero . "</li>";
    }
    echo "</ul>";
    ?>

</body>
</html>
