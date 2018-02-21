<?php

// Create associative array val with index and command line arguments
$val = array();
$doubles = array();
$singles = array();
$flags = array();

foreach($argv as $a ){
    $val[] = $a;

    //Check if a is two ticks
    if (strpos($a, '--') !== FALSE)
    {
        echo 'Found it';
        $doubles = ['DOUBLES'][$a];
    }
    else
    {
        echo 'Not found.';
    }
}

//Iterate through the elements on the console
//Check if the values are Double singles or flags
// Place values in designated array
// Displays val
foreach ($val as $index => $arg) {
    print("[$index] $arg\n");
}



