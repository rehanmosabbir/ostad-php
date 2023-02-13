<?php
/*
1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision
 */

function checkEvenOdd( int $number )
{

    if ( $number % 2 == 0 ) {
        return "{$number} is an even number";
    } else {
        return "{$number} is an odd number";
    }

}

$res = checkEvenOdd( 12 );
echo $res;
echo PHP_EOL;

/*
2. 1+2+3...…….100  Write a loop to calculate the summation of the series
 */
$result = 0;

for ( $i = 1; $i <= 100; $i++ ) {
    $result += $i;
}

echo $result;
