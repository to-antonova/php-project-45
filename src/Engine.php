<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

define("MAX_ATTEMPT", 3);

function startGame(string $taskText, callable $questionAndRightAnswer)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($taskText);

    for ($i = 0; $i < MAX_ATTEMPT; $i++) {
        [$question, $rightAnswer] = $questionAndRightAnswer();
        line('Question: %s', $question);
        $answer = prompt('Your answer');

        if ($rightAnswer !== $answer) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
            line("Let's try again, %s!", $name);
            return;
        }

        line("Correct!");
    }

    line('Congratulations, %s!', $name);
}
