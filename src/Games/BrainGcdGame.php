<?php

namespace Php\Project\Lvl1\Games\BrainGcdGame;

use function Php\Project\Lvl1\Cli\runEngine;

function getGcd($number1, $number2)
{
    $maxNumber = max($number1, $number2);
    $minNumber = min($number1, $number2);
    for ($divisor = $maxNumber; $divisor > 0; $divisor -= 1) {
        if ($minNumber % $divisor === 0 && $maxNumber % $divisor === 0) {
            return $divisor;
        }
    }
    return $divisor;
}

function runGame()
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