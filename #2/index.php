<?php

    $name = $_GET["name"];
    $email = $_GET["email"];
    $age = $_GET["age"];

    if(strlen($name) < 3 ||
    filter_var($email, FILTER_VALIDATE_EMAIL) == false ||
    filter_var($age, FILTER_VALIDATE_INT) == false)  {
        echo "Accesso negato";
    } else {
        echo "Accesso riuscito";
    };

?>