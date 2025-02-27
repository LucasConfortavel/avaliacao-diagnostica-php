<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>idades</title>
</head>
<body>

<h1>Idade</h1>

<form method="post">
    <label for="num1">Digite sua idade:</label>
    <input type="number" id="num1" name="num1" required>
    <br><br>
    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];


    if ($num1 <= 17) {
        echo 'menor de 18';
    }
    elseif($num1 >= 18 and $num1 >60){
        echo 'maior de 18';
    } else{
        echo 'idoso';
    }
}
?>

</body>
</html>