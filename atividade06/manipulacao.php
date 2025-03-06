<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover Vogais</title>
</head>
<body>
    <h1>Remover Vogais da String</h1>
    
    <?php
    function removerVogais($str) {
        $vogais = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        
        $strSemVogais = str_replace($vogais, '', $str);
        
        return $strSemVogais;
    }

    $stringOriginal = "programação";
    $stringSemVogais = removerVogais($stringOriginal);
    
    echo "<p><strong>String Original:</strong> " . $stringOriginal . "</p>";
    echo "<p><strong>String sem Vogais:</strong> " . $stringSemVogais . "</p>";
    ?>

</body>
</html>