<?php

for ($i = 1; $i <= 100; $i++) {
    echo "$i .- ";
    for ($j = 10; $j <= 23; $j++) {
        if ($j == 16) {
            continue;
        }

        echo $j;

        if ($j >= 12 && $j <= 15) {
            echo " $j";
        }
        if ($j < 23) {
            echo " ";
        }
    }
    echo "<br>";
}

?>
