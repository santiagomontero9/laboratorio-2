<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>

<h1>Calcule su índice de masa corporal</h1>

<form method="post">
    Ingrese su altura
    <input type="number" step="any" name="altura" placeholder="Ejm: 1.65" required> <br>
    
    Ingrese su peso
    <input type="number" step="any" name="peso" placeholder="Ejm: 60" required><br>
    
    <button type="submit">Calcular</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    $imc = $peso / ($altura * $altura);

    echo "El IMC calculado es de " . round($imc, 2) . "<br>";

    if ($imc < 18.5) {
        echo "Bajo peso";
    } elseif ($imc < 25) {
        echo "Peso normal";
    } elseif ($imc < 30) {
        echo "Sobrepeso";
    } else {
        echo "Obesidad";
    } 
}


?>

</body>
</html>