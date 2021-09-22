<?php

function code($message){
    $keyNumber = strlen($message) / 2;
    $newString = mb_substr($message, 5, $keyNumber);
    $space = str_replace('@#?', ' ', $newString);
    $reverse = strrev($space);

    echo $reverse . ' ';
}

code("0@sn9sirppa@#?ia'jgtvryko1");
code("q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj");
code("aopi?sgnirts@#?sedhtg+p9l!");
?>