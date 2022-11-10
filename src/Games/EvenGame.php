<?php

namespace BrainGames\Cli;

function isEven(int $number): string
{
    return $number % 2 === 0 ? 'yes' : 'no';
}

function runEvenGame(): void
{
    $taskText = 'Answer "yes" if the number is even, otherwise answer "no".';

    $questionAndRightAnswer = function () {
        $question = rand(0, 100);
        return [$question, isEven($question)];
    };

    startGame($taskText, $questionAndRightAnswer);
}
