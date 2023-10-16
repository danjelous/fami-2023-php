<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 101</title>
</head>
<body>
    <!-- Hier HTML Ausgabe -->
    <p>Hello HTML</p>

    <?php
        // Ab hier kann PHP geschrieben werden!
        echo '<p>Servus from PHP!</p>';
        echo '<p>Servus from PHP!</p>';

        // Kann mit PHP auch rechnen :)
        echo '<p>' . 5 + 4 . '</p>'; // Mit '.' HTML und PHP (Strings) verketten 
        echo 10 / 3;
        echo '<br>';

        // Conditionals in PHP
        if (8 < 12) {
            echo 'Größer!';
        } else {
            echo 'Kleiner!';
        }
    ?>

    <!-- Nach dem schließenden PHP-Tag kann ich hier wieder HTML schreiben -->
    <p>Hier wieder HTML</p>
</body>
</html>





