<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de tiempo vivido</title>
</head>
<body>

<h2>Calculadora de tiempo vivido</h2>

<form method="post">
    Ingrese la edad:
         <input type="number" name="edad" required>
        <button type="submit">Calcular</button>
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $edad = $_POST["edad"];

    $dias = $edad * 365;
    $horas = $dias * 24;
    $minutos = $horas * 60;

    echo "<h3>CALCULADORA:</h3>";
    echo "Días vividos: " . $dias . "<br>";
    echo "Horas vividas: " . $horas . "<br>";
    echo "Minutos vividos: " . $minutos . "<br>";
}
?>

</body>
</html>