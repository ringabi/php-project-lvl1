<?php

namespace Brain\Games\Games\BrainPrimeGame;

use function Brain\Games\Engine\runEngine;

function isPrime($number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= $number / 2; $i += 1) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function runGame()
{
        $task = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".\n";
        $attemptsCount = 3;
        $gameData = [];
    for ($currentAttempt = 0; $currentAttempt < $attemptsCount; $currentAttempt += 1) {
        $question = rand(0, 100);
        $answer = isPrime($question) ? 'yes' : 'no';
        array_push($gameData, [(string) $question, $answer]);
    }
        runEngine($gameData, $task);
}
