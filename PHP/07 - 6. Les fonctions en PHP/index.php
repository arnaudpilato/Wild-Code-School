<?php

$parametre_1 = '';
$parametre_2 = '';

function writeSecretSentence(string $parametre_1, string $parametre_2): string
{
    return $parametre_1 . " s'incline face à " . $parametre_2;
}

echo writeSecretSentence('Jacquie', 'Michel' );