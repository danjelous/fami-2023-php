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

        echo '<br>';

        // Variablen
        $mySexyVar = 'Daniel'; // Variablen beginnen mit $
        $MY_CONSTANT = 14.23; // Schema für Konstanten - großschreiben

        // Schleifen in PHP
        for ($i = 0; $i < 10; $i++) {
            echo $i . '<br>';
        }

        echo '<br>';

        // Arrays
        $myArray = [12, 0, 'lol', '', true, false, null];

        // Alle Elemente im Array durchloopen
        // count() gibt uns die Anzahl an Elementen in meinem Array. Wie .length in JS
        for ($i = 0; $i < count($myArray); $i++) {
            echo $myArray[$i] . '<br>'; // Vorsicht bei der Ausgabe von falsy Werten, werden unterdrückt :(
            // var_dump($myArray[$i]); // Mit var_dump detailliertere Ausgabe
        }

        // Objekte in PHP gibt es als assoziative Array's :)
        $student = [
            'name' => 'Daniel',
            'isPaying' => true,
            'grades' => [
                'midterm' => 81,
                'final' => 105,
            ],
        ];

        // Einzelne Werte im Array ausgeben
        echo $student['grades']['midterm'] . '<br>';

        // echo $student; // Array's kann ich so nicht ausgeben
        // print_r($student); // Geht, aber nicht so gut
        // var_dump($student); // var_dump geht immer, aber Output etwas meh

        // Kombi schon etwas besser
        echo '<pre>';

        // var_dump($student);
        print_r($student);
        echo '</pre>';
    ?>

    <!-- Nach dem schließenden PHP-Tag kann ich hier wieder HTML schreiben -->
    <p>Hier wieder HTML</p>
</body>
</html>





