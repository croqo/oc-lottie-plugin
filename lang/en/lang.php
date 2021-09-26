<?php return [
    "plugin" => [
        "name" => "Lottie",
        "description" => "Adds awesome Lottie animations to your OctoberCMS website with ease"
    ],
    "components" => [
        "player" => 
        [
            "name" => "Lottie animation",
            "description" => "JS player / animation container",
            "src" => [
                "title" => "Path",
                "description" => "Lottie animation URL (*.json)",
                "validation_message" => "It looks like NOT valid path to *.json file",
            ],
        ],
    ],
];