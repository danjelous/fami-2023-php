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
    <title>Contact</title>

    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <?php printNav(); ?>

    <main>
        <h1>Contact</h1>

        <form action="form-received.php" method="post">

            <div class="form-control">
                <label for="firstName">Vorname:</label>
                <input type="text" name="firstName" id="firstName">
            </div>

            <div class="form-control">
                <label for="lastName">Nachname:</label>
                <input type="text" name="lastName" id="lastName">
            </div>

            <div class="form-control">
                <label for="email">E-Mail:</label>
                <input type="email" name="email" id="email">
            </div>

            <div class="form-control">
                <label for="comment">Kommentar:</label>
                <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
            </div>

            <button type="submit">Absenden!</button>
        </form>

    </main>
</body>

</html>