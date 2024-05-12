<?php

declare(strict_types=1);

$number = (int)($argv[1] ?? throw new InvalidArgumentException('Please provide a number'));

if ($number < 1) {
    throw new InvalidArgumentException('Please provide a positive number');
}


function isFizz(int $number): bool
{
    return 0 === ($number % 3);
}

function isFuzz(int $number): bool
{
    return 0 === ($number % 5);
}

function display(int $number): void
{
    echo PHP_EOL;
    for ($i = 1; $i <= $number; $i++) {
        echo match (true) {
                isFizz($i) && isFuzz($i) => 'FizzBuzz',
                isFizz($i) => 'Fizz',
                isFuzz($i) => 'Fuzz',
                default => $i,
            } . PHP_EOL;
    }
}

display($number);
