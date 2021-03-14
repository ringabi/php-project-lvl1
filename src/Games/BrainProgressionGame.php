<?php

namespace Brain\Games\Games\BrainProgressionGame;

use function Brain\Games\Engine\runEngine;

function getQuestion(int $firstNumber, int $stepProgression, int $indexMissedNumber): string
{
        $progression = [];
        $progressionLength = 10;
    for ($index = 0; $index < $progressionLength; $index += 1) {
        if ($index === $indexMissedNumber) {
                array_push($progression, '..');
        } else {
                array_push($progression, $firstNumber + $index * $stepProgression);
        }
    }
        return implode(' ', $progression);
}

function runGame(): string
{
        $task = "What number is missing in the progression?\n";
        $attemptsCount = 3;
        $gameData = [];
        $progressionLength = 10;
    for ($currentAttempt = 0; $currentAttempt < $attemptsCount; $currentAttempt += 1) {
            $firstNumber = rand(0, 100);
            $stepProgression = rand(1, 20);
            $indexMissedNumber = rand(0, $progressionLength - 1);
            $question = getQuestion($firstNumber, $stepProgression, $indexMissedNumber);
            $answer = $firstNumber + $indexMissedNumber * $stepProgression;
            array_push($gameData, [$question, (string) $answer]);
    }
        runEngine($gameData, $task);
}
