<?php

namespace Brain\Games\Games\BrainCalcGame;

use function Brain\Games\Engine\runEngine;

function calculate(int $number1, int $number2, string $operator): int
{
    switch ($operator) {
        case '+':
            return $number1 + $number2;
        case '-':
            return $number1 - $number2;
        case '*':
            return $number1 * $number2;
        default:
            return 1;
    }
}

function runGame(): void
{
        $task = "What is the result of the expression?\n";
        $operators = ['+', '-', '*'];
        $attemptsCount = 3;
        $gameData = [];
    for ($currentAttempt = 0; $currentAttempt < $attemptsCount; $currentAttempt += 1) {
                $operatorIndex = rand(0, count($operators) - 1);
                $number1 = rand(0, 100);
                $number2 = rand(0, 100);
                $operator = $operators[$operatorIndex];
                $answer = calculate($number1, $number2, $operator);
                $question = "{$number1} {$operator} {$number2}";
                array_push($gameData, [$question, (string) $answer]);
    }
        runEngine($gameData, $task);
}
