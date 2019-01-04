<?php
/**
 * Created by PhpStorm.
 * User: jbosegre
 * Date: 1/4/2019
 * Time: 10:28 AM
 */

$numbers = array(7,9,8,9,8,8,6);
$numbersLength = count($numbers);

function printArray($numbers, $numbersLength)
{
    for ($x = 0; $x < $numbersLength; $x++)
    {
        echo $numbers[$x];
        echo "<br>";
    }
}