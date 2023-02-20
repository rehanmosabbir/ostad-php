<?php
/*
1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)
 */

$arrOfStr = ["Mango", "Jackfruit", "Kiwi", "Date", "Grape", "Pineapple", "Apple", "Orange"];

function comparatorFunc( $x, $y )
{

    if ( strlen( $x ) == strlen( $y ) ) {
        return 0;
    } else

    if ( strlen( $x ) < strlen( $y ) ) {
        return -1;
    } else {
        return 1;
    }

}

usort( $arrOfStr, "comparatorFunc" );
print_r( $arrOfStr );

/*
2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
 */

function concatenateString( $str1, $str2 )
{
    return "{$str1}{$str2}";
}

$str1 = "Good";
$str2 = "Morning";

echo concatenateString( $str1, $str2 );

/*
3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
 */
$initialArr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function removeFirstLastElement( $arr )
{
    array_pop( $arr );
    array_shift( $arr );
    return $arr;
}

print_r( removeFirstLastElement( $initialArr ) );

/*
4.Write a PHP function to check if a string contains only letters and whitespace.
 */

/*
5.Write a PHP function to find the second largest number in an array of numbers.
 */

$nums = [5, 10, 50, 45, 87, 100, 98, 4, 15];

function findSecondLargestNum( $nums )
{
    rsort( $nums );
    return $nums[1];
}

echo findSecondLargestNum( $nums );
