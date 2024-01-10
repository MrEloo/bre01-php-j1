<?php

function average($tabs): float
{

    $result = 0;

    foreach ($tabs as $key => $tab) {
        $result = $result + $tab;
    }
    $average = $result / count($tabs);
    return $average;
};
echo average([12, 15, 18, 9])  . "<br>";
echo average([12, 15, 18, 11, 14])  . "<br>";
