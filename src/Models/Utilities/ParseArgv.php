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
$clicker = 0;
$dVal = false;
$firstVal = true;
$secondVal = false;
$characterOne = 'a';
$characterTwo = 'b ';

// Function which allows the user to explode using multiple chars
foreach($argv as $a ){
    $val[] = $a;


    //Is the data a double, TWO TICKS
    if (strpos($a, '--') !== FALSE)   // Alright its a double now what
    {
        $tempTwo;
        $temp = explode("=", $a); // --good grades
        $temp1 = str_replace("--", "", $temp[0]);
        $c = count($temp);
        $clicker += 1;

        for ($i = 0; $i < $c; $i++) {
            $tempTwo = $temp[$i];
        }
        $doubles[$temp1][] = $tempTwo;
    }

    }
echo("DOUBLE\n");
print_r($doubles);



//  DOUBLES ’grades’ => ’good’ (1 argument)
// ’names’ => [0] ’Dominic’, [1] ’Mimi’, [2] ’Luke’ (3 arguments)









