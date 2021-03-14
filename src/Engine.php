<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function runEngine(array $gameData, string $task)
{
    line('Welcome to the Brain Games!');
    $userName = prompt('May I have your name?', '', ' ');
    line("Hello, %s!", $userName);
    print_r($task);
    foreach ($gameData as [$question, $answer]) {
            line("Question: $question");
            $userAnswer = prompt('Your answer');
        if ($answer !== $userAnswer) {
                print_r("'$userAnswer' is wrong answer ;(. Correct answer was '$answer'.\n");
                print_r("Let's try again, $userName!\n");
        }
            print_r("Correct!\n");
    }
    print_r("Congratulations, $userName!\n");
}
