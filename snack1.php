<?php
$football_matches = [
    [
        "home" => "Lazio",
        "away" => "Roma",
        "golHome" => 2,
        "golAway" => 0
    ],
    [
        "home" => "Milan",
        "away" => "Inter",
        "golHome" => 1,
        "golAway" => 3
    ],

    [
        "home" => "Frosinone",
        "away" => "Bologna",
        "golHome" => 0,
        "golAway" => 1
    ]
];

foreach ($football_matches as $teams) {
    echo "{$teams['home']} - {$teams['away']} | {$teams['golHome']}-{$teams['golAway']} <br> ";
}

?>