<?php

$movies = [
    'Indiana Jones and the Raiders of the Lost Ark' => ['Harisson Ford' , 'Denholm Elliott' , 'John Rhys-Davies'],
    'Indiana Jones and the Temple od Doom' => ['Harrison Ford' , 'Kate Capshaw' , 'Jonathan Ke Quan'],
    'Indiana Jones and the Last Crusade' => ['Harrison Ford' , 'Denholm Elliott' , 'Sean Connery']
];

foreach ($movies as $key => $movie) {
    echo 'Name of movie:' . "\n" . $key . "\n\n";
    echo 'Actors:' . "\n";
    for ($loop = 0; $loop < count($movies); $loop++) {
        echo $movie[$loop] . "\n";
    }
    echo "\n\n";
}

?>