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
            "url" => [
                "title" => "Animation URL",
                "description" => "Lottie animation URL (*.json)",
                "validation_message" => "It looks like NOT valid URL to *.json file",
            ],
            "look" => [
                "title" => "Visual Style",
                "description" => "In form of...",
            ],
            "ratio" => [
                "title" => "Aspect Ratio",
                "description" => "In form of...",
            ],
        ],
    ],
];