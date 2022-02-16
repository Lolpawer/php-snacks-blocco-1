<?php

$numberArray = [];

for ($i = 0; $i < 15; $i++) {
    $randomNumber = rand(1,100);

    if (!in_array($randomNumber, $numberArray)) {
        $numberArray[] = $randomNumber;
    } else {
        $i--;
    }
}

for ($i = 0; $i < count($numberArray); $i++) {
    echo "<div>" . $numberArray[$i] . "</div>";
}

?>