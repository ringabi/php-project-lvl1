<?php

namespace Brain\Games\Games\BrainEvenGame;

use function Brain\Games\Engine\runEngine;

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function runGame()
{
    $attemptsCount = 3;
    $task = "Answer \"yes\" if the number is even, otherwise answer \"no\".\n";
    $gameData = [];
    for ($currentAttempt = 0; $currentAttempt < $attemptsCount; $currentAttempt += 1) {
            $question = rand(0, 1000);
            $answer = isEven($question) ? 'yes' : 'no';
            array_push($gameData, [(string) $question, $answer]);
    }
    runEngine($gameData, $task);
}
