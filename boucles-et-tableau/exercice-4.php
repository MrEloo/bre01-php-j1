<?php

$users = [
    [
        "firstName" => "Mari",
        "lastName" => "Doucet"
    ],
    [
        "firstName" => "Hugues",
        "lastName" => "Froger"
    ]
];

foreach ($users as $key => $user) {
    echo $user["firstName"] . " " . $user["lastName"];
    echo "<br>";
};
