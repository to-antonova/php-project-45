<?php

namespace BrainGames\Games;

use function BrainGames\startGame;

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function runEvenGame(): void
{
    $taskText = 'Answer "yes" if the number is even, otherwise answer "no".';

    $questionAndRightAnswer = function () {
        $question = rand(0, 100);
        $rightAnswer = isEven($question) ? 'yes' : 'no';
        return [$question, $rightAnswer];
    };

    startGame($taskText, $questionAndRightAnswer);
}
