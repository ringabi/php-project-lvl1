<?php

namespace Php\Project\Lvl1\Games\BrainProgressionGame;

use function Php\Project\Lvl1\Cli\runEngine;

function getQuestion($firstNumber, $stepProgression, $indexMissedNumber)
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

function runGame()
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
