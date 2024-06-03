<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$questions = [
    [
        'question' => 'What is the capital of France?',
        'choices' => ['Paris', 'London', 'Berlin', 'Madrid'],
        'correct' => 'Paris'
    ],
    [
        'question' => 'What is 2 + 2?',
        'choices' => ['3', '4', '5', '6'],
        'correct' => '4'
    ],
    [
        'question' => 'What is the color of the sky?',
        'choices' => ['Blue', 'Green', 'Red', 'Yellow'],
        'correct' => 'Blue'
    ]
];

echo json_encode(array_map(function ($q) {
    return [
        'question' => $q['question'],
        'choices' => $q['choices']
    ];
}, $questions));
?>
