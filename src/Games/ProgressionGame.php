<?php

namespace BrainGames\Games\ProgressionGame;

use function BrainGames\Engine\startGame;

const TASK_TEXT = 'What number is missing in the progression?';

function getRandomProgression(): array
{

    $firstTerm = rand(0, 10);
    $increment = rand(1, 5);
    $countOfNumbers = 10;
    $progression = [];

    for ($i = 0; $i < $countOfNumbers; $i++) {
        $progression[$i] = $firstTerm + $i * $increment;
    }
    return $progression;
}


function runGame()
{
    $questionAndRightAnswer = function () {
        $progression = getRandomProgression();
        $indexOfMissingNumber = rand(0, 9);
        $progressionWithMissingNumber = array_replace($progression, array($indexOfMissingNumber => '..'));

        $question = implode(' ', $progressionWithMissingNumber);
        $rightAnswer = $progression[$indexOfMissingNumber];
        return [$question, (string)$rightAnswer];
    };

    startGame(TASK_TEXT, $questionAndRightAnswer);
}
