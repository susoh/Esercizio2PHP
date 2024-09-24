<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $capitale = 1000;
        $tasso = 5;
        $numGiorni = 200;
        echo "<p> Il capitale è: $capitale </p><br>";
        echo "<p> Il tasso è: $tasso </p><br>";
        echo "<p> Il numero di giorni è: $numGiorni </p><br>";
        $interesse = ($capitale * $tasso * $numGiorni) /36500;
        $n_formattato = number_format($interesse, 2);
        echo "<h2 style='color: green'> Il tasso di interesse è: $n_formattato €</h2>"
    ?>
</body>
</html>
