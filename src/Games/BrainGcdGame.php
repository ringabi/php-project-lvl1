<?php

namespace Brain\Games\Games\BrainGcdGame;

use function Brain\Games\Engine\runEngine;

function getGcd(int $number1, int $number2): int
{
    $maxNumber = max($number1, $number2);
    $minNumber = min($number1, $number2);
    $divisor;
    for ($divisor = $maxNumber; $divisor > 0; $divisor -= 1) {
        if ($minNumber % $divisor === 0 && $maxNumber % $divisor === 0) {
            return $divisor;
        }
    }
    return $divisor;
}

function runGame(): string
{
    $task = "Find the greatest common divisor of given numbers.\n";
    $attemptsCount = 3;
    $gameData = [];
    for ($currentAttempt = 0; $currentAttempt < $attemptsCount; $currentAttempt += 1) {
        $number1 = rand(0, 100);
        $number2 = rand(0, 100);
        $answer = getGcd($number1, $number2);
        $question = "{$number1} {$number2}";
        array_push($gameData, [$question, (string) $answer]);
    }
    runEngine($gameData, $task);
}
