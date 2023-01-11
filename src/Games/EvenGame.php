<?php

namespace BrainGames\Games\EvenGame;

use function BrainGames\Engine\startGame;

const TASK_TEXT = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function runGame(): void
{
    $questionAndRightAnswer = function () {
        $question = rand(0, 100);
        $rightAnswer = isEven($question) ? 'yes' : 'no';
        return [$question, $rightAnswer];
    };

    startGame(TASK_TEXT, $questionAndRightAnswer);
}
