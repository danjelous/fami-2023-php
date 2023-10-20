<?php

// Funktion, die uns die Navigation auf jeder Seite ausgibt
function printNav() {
    // Mit ? > beende ich den PHP-Teil und kann wieder HTML schreiben
    ?>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
        </nav>
    <?php
    // Ab hier wieder PHP
}

function debug($array) {
    echo '<pre>';
        print_r($array);
    echo '</pre>';
}