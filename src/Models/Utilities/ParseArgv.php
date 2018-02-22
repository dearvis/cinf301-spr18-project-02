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
$clicker = 0;


// Function which allows the user to explode using multiple chars
foreach($argv as $a ){
    $val[] = $a;

    //Is the data a double, TWO TICKS
    if (strpos($a, '--') !== FALSE)   // Alright its a double now what
    {
        $tempTwo;
        $temp = explode("=", $a);
        $temp1 = str_replace("--", "", $temp[0]);

        foreach ($temp as $t)
        {
            $v =  explode(",", $t);
        }

        $arguments[] = count($v);  // Array of how many arguments
        $c = count($temp);
        $clicker += 1;

        for ($i = 0; $i < $c; $i++) {
            $tempTwo = $temp[$i];
        }
        $doubles[$temp1][] = $tempTwo;
    }

//    if(strpos($a, '-') !== FALSE)
//    {
//
//    }







    // End of for loop
    }
echo("");
print_r($a);


// If the data is a single Flag










