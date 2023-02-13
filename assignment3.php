<?php
/*
1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision
 */

function checkEvenOdd( int $number )
{

    if ( $number % 2 == 0 ) {
        echo "{$number} is an even number";
    } else {
        echo "{$number} is an odd number";
    }

}

checkEvenOdd( 12 );

/*
2. 1+2+3...…….100  Write a loop to calculate the summation of the series
 */
