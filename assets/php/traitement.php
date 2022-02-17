<?php
// les variables definie
    $a = $_POST["name"];
    echo $a;
    $b = $_POST["surname"];
    echo (" ".$b);
    $dateNaissance = $_POST["birthday"];
    echo (" ".$dateNaissance);
    $aujourdhui = date("Y-m-d");
    $e = 18;

// le programe de redirections

    $diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
    echo 'Votre age est '.$diff->format('%y');

        if ($diff->format('%y') < $e){
            header('Location: https://us.teletubbies.com');
        }
        else 
            header('Location: https://www.amazon.com');
            
// fin du programme de redirections