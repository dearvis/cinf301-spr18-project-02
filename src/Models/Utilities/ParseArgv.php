<?php
/**
 * Created by PhpStorm.
 * Author DeArvis Troutman
 * Date: 2/17/2018
 *
 * Time: 11:26 PM
 */
// Create associative array val with index and command line arguments
$val = array();
$doubles = array();
$singles = array();
$flags = array();
$count = 1;
$clicker = 1;
$dVal = false;
$firstVal = true;
$secondVal = false;
$characterOne = 'a';
$characterTwo = 'b ';

// FUnction which allows the user to explode using multiple chars
function multiexplode ($seq,$string)
{

    $initial = str_replace($seq, $seq[0], $string);
    $launch = explode($seq[0], $initial);
    return  $launch;
}


foreach($argv as $a ){
    $val[] = $a;

    //Check if a is two ticks


    //Is the data a double, TWO TICKS
    if (strpos($a, '--') !== FALSE)   // Alright its a double now what
    {
        $explodedValues = multiexplode(array("--", "=", ","), $a);   // Gets rid of the specified characters and returns improved array
        print_r($explodedValues);
    }
    }

//Iterate through the elements on the console
//Check if the values are Double singles or flags
// Place values in designated array
// Displays val
foreach ($val as $index => $arg) {
    print("[$index] $arg\n");
}


