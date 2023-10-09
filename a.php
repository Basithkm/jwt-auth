<?php
$rows = 18; // Number of rows in the pattern

for ($i = 1; $i <= $rows; $i++) {
    // Print spaces before the stars
    for ($j = 1; $j <= $rows - $i; $j++) {
        echo " ";
    }

    // Print stars
    for ($k = 1; $k <= $i * 2 - 1; $k++) {
        echo "*";
    }

    // Move to the next line
    echo "\n";
}
?>
