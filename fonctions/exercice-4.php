<?php

function getFirst(array $tab): ?int
{
    if ($tab) {
        echo $tab[0];
    } else {
        return null;
    }
};

echo getFirst([13, 24, 45]) . "<br>";
echo getFirst([]) . "<br>";
