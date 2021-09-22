<?php
$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.

// TODO

$indyWeapon = 0;

switch ($opponentWeapon){
    case 'fists':
        $indyWeapon = $weapons[2];
        echo "The opponent have " . $opponentWeapon . "\n";
        echo "Indy need to use " . $indyWeapon;
        break;
    case 'whip':
        $indyWeapon = $weapons[0];
        echo "The opponent have " . $opponentWeapon . "\n";
        echo "Indy need to use " . $indyWeapon;
        break;
    case 'gun':
        $indyWeapon = $weapons[1];
        echo "The opponent have " . $opponentWeapon . "\n";
        echo "Indy need to use " . $indyWeapon;
        break;
    default:
        echo "Error";
        break;
}