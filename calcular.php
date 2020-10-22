<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triángulo</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1 class="centrado">Cálculo de la Hipotenusa de un Triángulo</h1>
    </header>
    <section>
        <h4 class="centrado">EL valor del Cateto opuesto es de: 4cm</h4>
        <h4 class="centrado">EL valor del Cateto adyacente es de: 3cm</h4>

        <h3 class="centrado">El valor de la Hipotenusa es de: </h3>
        <?php
            $c1 = 4;
            $c2 = 3;
            $h = null;

            $h = sqrt( $c1**2 + $c2**2);
            echo "<h3 class='centrado'>" . $h . "cm</h3>";
        ?>
    </section>
</body>
</html>