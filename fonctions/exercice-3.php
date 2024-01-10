<?php

function isOdd($int): ?bool
{
    if ($int % 2 === 0) {
        return true;
    } else {
        return false;
    }
};

echo isOdd(1) . "<br>";
