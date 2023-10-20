<?php
    //
    include_once('functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form received!</title>

    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <?php printNav(); ?>
    <main>
        <h1>Anfrage erhalten!</h1>

        <p>Deine Daten:</p>
        <ul>
            <li>Vorname: <?= htmlspecialchars($_POST['firstName']) ?></li>
            <li>Nachname: <?= htmlspecialchars($_POST['lastName']) ?></li>
            <li>E-Mail: <?= htmlspecialchars($_POST['email']) ?></li>
        </ul>

        <!-- 
            User Input IMMER escapen, also nicht direkt ausführen!
            Problem: Ich kann so Schadcode bei mir ausführen -> Cross Site Scripting Attack (XSS)
            Lösung: htmlspecialchars() via PHP, so wird nur Text ausgegeben und nicht 'ausgeführt'!
         -->
        <p>Dein Kommentar:</p>
        <p><?= htmlspecialchars($_POST['comment']) ?></p>

        <?php
            // debug($_POST);
        ?>
    </main>
</body>
</html>