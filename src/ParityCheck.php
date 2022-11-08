<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function isEven($number): string
{
    return $number % 2 === 0 ? 'yes' : 'no';
//    if ($number % 2 === 0) {
//        return 'yes';
//    } else {
//        return 'no';
//    }
}

function parityCheck(): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i < 3; $i++) {
        $number = rand(0, 100);
        $rightAnswer = isEven($number);
        line('Question: %d', $number);
        $answer = prompt('Your answer: ');
        if ($rightAnswer === $answer) { //поменять местами if/else
            line("Correct!");
            if ($i === 2) {
                line('Congratulations, %s!', $name);
            }
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
            line("Let's try again, %s!", $name);
            break;
        }
    }
}
