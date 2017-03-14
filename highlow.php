<?php
if ($argc == 3) {
    $randomNumber = rand($argv[2], $argv[3]);
} else {
    echo "Error: input two numbers after calling program. Ex: highlow.php 1 100 (will give you a min number of 1 and max of 100)" . PHP_EOL;
    exit(0);
}
//Create a random number and set user correct to false to repeat program

$userCorrect = false;

//asks user for guess, compares against the random number. Gives user hint based on
//if the number is higher or lower than the random number. Loop ends once user is correct and userCorrect is set to true
do {
    fwrite(STDOUT, 'Guess? ');
    $answer = fgets(STDIN);
    if ((int)$answer === (int)$randomNumber) {
        echo "You gussed it right!" . PHP_EOL;
        $userCorrect = true;
    } else {
        if ($answer < $randomNumber) {
            echo "HIGHER!" . PHP_EOL;
        } else {
            echo "LOWER!" . PHP_EOL;
        }
    }
} while ($userCorrect === false);



