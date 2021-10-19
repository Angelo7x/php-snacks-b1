<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa 
e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. -->

<?php

$calendarioPartite = [
    [
        "squadraCasa" => "Brindisi",
        "squadraOspite" => "fortitudoBologna",
        "puntiCasa" => 105,
        "puntiOspite" => 93,
    ],
    [
        "squadraCasa" => "Reggiana",
        "squadraOspite" => "Trento",
        "puntiCasa" => 74,
        "puntiOspite" => 78,
    ],
    [
        "squadraCasa" => "Bescia",
        "squadraOspite" => "Napoli",
        "puntiCasa" => 98,
        "puntiOspite" => 88,
    ],
    [
        "squadraCasa" => "Cremona",
        "squadraOspite" => "Varese",
        "puntiCasa" => 94,
        "puntiOspite" => 78,
    ],
];

echo "{$calendarioPartite[0]["squadraCasa"]} - {$calendarioPartite[0]["squadraOspite"]}  |  {$calendarioPartite [0]["puntiCasa"]} - {$calendarioPartite [0]["puntiOspite"]} <br>";

echo "{$calendarioPartite[1]["squadraCasa"]} - {$calendarioPartite[1]["squadraOspite"]}  |  {$calendarioPartite [1]["puntiCasa"]} - {$calendarioPartite [1]["puntiOspite"]} <br>";

echo "{$calendarioPartite[2]["squadraCasa"]} - {$calendarioPartite[2]["squadraOspite"]}  |  {$calendarioPartite [2]["puntiCasa"]} - {$calendarioPartite [2]["puntiOspite"]} <br>";

echo "{$calendarioPartite[3]["squadraCasa"]} - {$calendarioPartite[3]["squadraOspite"]}  |  {$calendarioPartite [3]["puntiCasa"]} - {$calendarioPartite [3]["puntiOspite"]} <br>";



