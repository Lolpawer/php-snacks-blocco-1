<?php

    $partite = [

        [
            "casa" => "Scrimblo",
            "ospite" => "Bimblo",
            "puntiCasa" => 100,
            "puntiOspite" => 250,
        ],
        [
            "casa" => "Sploinky",
            "ospite" => "Yoinky",
            "puntiCasa" => 234,
            "puntiOspite" => 99,
        ],
        [
            "casa" => "Baba",
            "ospite" => "Booey",
            "puntiCasa" => 123,
            "puntiOspite" => 49,
        ],
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>B-BALL TOURNAMENT</h1>

    <?php for ($i = 0; $i < count($partite); $i++) {
        echo "<div> {$partite[$i]["casa"]} - {$partite[$i]["ospite"]} | {$partite[$i]["puntiCasa"]} - {$partite[$i]["puntiOspite"]}";
        } ?>
    
</body>
</html>