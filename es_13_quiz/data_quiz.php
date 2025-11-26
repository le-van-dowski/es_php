<?php
// data_quiz.php

$quiz = [
    [
        "question" => "Qual è il caso usato per il complemento oggetto in polacco?",
        "options" => [
            "Nominativo",
            "Accusativo",
            "Genitivo",
            "Dativo"
        ],
        "answer" => "1"
    ],
    [
        "question" => "Quale forma plurale corretta ha il sostantivo 'książka'?",
        "options" => [
            "książki",
            "książka",
            "książkom",
            "książkach"
        ],
        "answer" => "0"
    ],
    [
        "question" => "Qual è il pronome personale per 'noi' in polacco?",
        "options" => [
            "wy",
            "my",
            "oni",
            "ja"
        ],
        "answer" => "1"
    ],
    [
        "question" => "Come si dice 'molto' in polacco?",
        "options" => [
            "mało",
            "dużo",
            "trochę",
            "niewiele"
        ],
        "answer" => "1"
    ],
    [
        "question" => "Quale verbo significa 'mangiare' in polacco?",
        "options" => [
            "pić",
            "jeść",
            "czytać",
            "pisać"
        ],
        "answer" => "1"
    ]
];

// // Funzione per stampare il quiz
// function display_quiz($quiz) {
//     foreach ($quiz as $index => $q) {
//         echo ($index + 1) . ". " . $q['question'] . "\n";
//         foreach ($q['options'] as $key => $option) {
//             echo "   $key) $option\n";
//         }
//         echo "\n";
//     }
// }

// Funzione per controllare le risposte
// function check_answer($question_index, $user_answer, $quiz) {
//     if (!isset($quiz[$question_index])) {
//         return false;
//     }
//     return strtolower($user_answer) === strtolower($quiz[$question_index]['answer']);
// }

// Esempio di stampa del quiz
// display_quiz($quiz);

// Esempio di controllo risposta
// echo check_answer(0, 'b', $quiz) ? "Corretto!\n" : "Sbagliato!\n";
?>