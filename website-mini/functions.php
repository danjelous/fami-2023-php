<?php

// Funktion, die uns die Navigation auf jeder Seite ausgibt
function printNav() {
    // Mit ? > beende ich den PHP-Teil und kann wieder HTML schreiben
    ?>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
        </nav>
    <?php
    // Ab hier wieder PHP
}