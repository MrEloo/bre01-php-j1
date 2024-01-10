<?php

function getFirst($tab)
{
    if ($tab) {
        echo $tab[0];
    } else {
        echo 'null';
    }
};

echo getFirst([13, 24, 45]) . "<br>";
echo getFirst([]) . "<br>";
