<?php

function isOdd($int)
{
    if ($int % 2 === 0) {
        return "$int est pair";
    } else {
        return "$int est impair";
    }
};

echo isOdd(1) . "<br>";
