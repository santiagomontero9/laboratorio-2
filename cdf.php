<?php


$frase = "El éxito llega cuando luchas por tus sueños y alcanzas tu meta";
$nivelCringe = 0;
$nivelCursi = 0;
$nivelRandom = 0;


$palabras = str_word_count($frase);
$nivelCringe += $palabras;
$nivelCursi += $palabras;
$nivelRandom += $palabras;


if (str_contains($frase, "éxito")) {
    $nivelCringe += 15;
    $nivelCursi += 15;
    $nivelRandom += 15;
}


if (str_contains($frase, "meta")) {
    $nivelCringe += 15;
    $nivelCursi += 15;
    $nivelRandom += 15;
}


if (str_contains($frase, "sueños")) {
    $nivelCringe += 15;
    $nivelCursi += 15;
    $nivelRandom += 15;
}


$nivelCringe += random_int(0, 20);
$nivelCursi += random_int(0, 20);
$nivelRandom += random_int(0, 20);


echo "Frase: " . $frase . "<br><br>";
echo "Nivel Cringe: " . $nivelCringe . "<br>";
echo "Nivel Cursi: " . $nivelCursi . "<br>";
echo "Nivel Random: " . $nivelRandom;

?>