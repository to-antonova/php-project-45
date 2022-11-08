<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

define("MAX_ATTEMPT", 3);

function startGame($taskText, $questionAndRightAnswer)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($taskText);
    for ($i = 0; $i < MAX_ATTEMPT; $i++) {
        [$question, $rightAnswer] = $questionAndRightAnswer();
        line('Question: %s', $question);
        $answer = prompt('Your answer');
        if ($rightAnswer !== (int)$answer) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
            line("Let's try again, %s!", $name);
            return;
        } else {
            line("Correct!");
        }
    }
    line('Congratulations, %s!', $name);
}
