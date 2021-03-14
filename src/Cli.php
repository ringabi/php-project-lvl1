<?php

namespace Php\Project\Lvl1\Cli;

use function cli\line;
use function cli\prompt;

function greeting()
{
        line('Welcome to the Brain Games!');
        $userName = prompt('May I have your name?', false, ' ');
        line("Hello, %s!", $userName);
}
