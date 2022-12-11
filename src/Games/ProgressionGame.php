<?php

namespace BrainGames\Games\ProgressionGame;

use function BrainGames\Engine\startGame;

define("TASK_TEXT_PROGRESSION", 'What number is missing in the progression?');

function getRandomProgression(): array
{
    $progression = [];
    $progression[] = rand(0, 10);
    $countOfNumbers = 10;
    $increment = rand(1, 5);
    for ($i = 1; $i < $countOfNumbers; $i++) {
        $progression[$i] = $progression[$i - 1] + $increment;
    }
    return $progression;
}


function runGame()
{
    $questionAndRightAnswer = function () {
        $progression = getRandomProgression();
        $missingNumber = $progression[rand(1, 8)];
        $strProgression = implode(' ', $progression);
        $searchForStrReplace = ' ' . $missingNumber . ' ';
        $hidingSymbol = ' .. ';
        $progressionWithMissingNumber = str_replace($searchForStrReplace, $hidingSymbol, $strProgression);
        $question = $progressionWithMissingNumber;
        $rightAnswer = $missingNumber;
        return [$question, (string)$rightAnswer];
    };

    startGame(TASK_TEXT_PROGRESSION, $questionAndRightAnswer);
}
