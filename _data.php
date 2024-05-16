<?php
$beatles = [
    "name" => "the Beatles",
    "location" => [
        "city" => "Liverpool",
        "country" => "England"
    ],
    "members" => [
        [
            "name" => [
                "first" => "John",
                "last" => "Lennon"
            ],
            "roles" => [
                "rhythm guitarist",
                "vocalist",
                "primary songwriter"
            ],
            "birth" => 1940,
            "death" => 1980,
            "image" => "/images/john.jpg"
        ],
        [
            "name" => [
                "first" => "Paul",
                "last" => "McCartney"
            ],
            "roles" => [
                "vocalist",
                "bassist",
                "primary songwriter"
            ],
            "birth" => 1942,
            "image" => "/images/paul.jpg"
        ],
        [
            "name" => [
                "first" => "George",
                "last" => "Harrison"
            ],
            "roles" => [
                "lead guitarist",
                "occasional vocalist"
            ],
            "birth" => 1943,
            "death" => 2001,
            "image" => "/images/george.jpg"
        ],
        [
            "name" => [
                "first" => "Ringo",
                "last" => "Starr"
            ],
            "roles" => [
                "drummer",
                "occasional vocalist"
            ],
            "birth" => 1940,
            "image" => "/images/ringo.jpg"
        ]
    ],
    "albums" => [
        "Please Please Me",
        "With the Beatles",
        "A Hard Day's Night",
        "Beatles for Sale",
        "Help!",
        "Rubber Soul",
        "Revolver",
        "Sgt. Pepper's Lonely Hearts Club Band",
        "Magical Mystery Tour",
        "The Beatles (White Album)",
        "Yellow Submarine",
        "Abbey Road",
        "Let It Be"
    ]
];

$bandName = $beatles["name"];
$city = $beatles["location"]["city"];
$country = $beatles["location"]["country"];
$location = "$city, $country";
$members = $beatles["members"];
$albums = $beatles["albums"];

function slugify($string){
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
    return $slug;
}
?>