<?php
$frase = "";
$nivel_cringe = 0;
$nivel_cursi = 0;
$nivel_random = 0;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $frase = $_POST["frase"];
    $texto_procesado = mb_strtolower($frase); 


    $nivel_cringe = str_word_count($frase);

   
    if (str_contains($texto_procesado, "éxito")) {
        $nivel_cursi += 15;
    }

    
    if (str_contains($texto_procesado, "meta")) {
        $nivel_cursi += 15;
    }

   
    if (str_contains($texto_procesado, "sueños")) {
        $nivel_cursi += 15;
    }

    
    $nivel_random += random_int(0, 20);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Analizador Motivacional</title>
    <style>
        body{
            margin:0;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            background:#0f172a;
            color:white;
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
        }

        .contenedor{
            background:#1e293b;
            padding:30px;
            width:480px;
            border-radius:5px;
            border:2px solid #38bdf8;
        }

        h2{
            text-align:center;
            margin-bottom:20px;
            color:#38bdf8;
        }

        textarea{
            width:100%;
            padding:12px;
            background:#0f172a;
            color:white;
            border:1px solid #38bdf8;
            resize:none;
        }

        button{
            margin-top:12px;
            width:100%;
            padding:10px;
            background:#38bdf8;
            border:none;
            color:black;
            font-weight:bold;
            cursor:pointer;
        }

        .salida{
            margin-top:20px;
            padding:15px;
            background:#0f172a;
            border:1px solid #38bdf8;
        }
    </style>
</head>
<body>

<div class="contenedor">
    <h2>Calificador de Frases</h2>

    <form method="POST">
        <textarea name="frase" rows="4" required placeholder="Escribe una frase motivacional..."><?php echo htmlspecialchars($frase); ?></textarea>
        <button type="submit">Evaluar</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
        <div class="salida">
            <p><strong>Frase:</strong> <?php echo htmlspecialchars($frase); ?></p>
            <p> Nivel Cringe: <?php echo $nivel_cringe; ?></p>
            <p> Nivel Cursi: <?php echo $nivel_cursi; ?></p>
            <p> Nivel Random: <?php echo $nivel_random; ?></p>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
