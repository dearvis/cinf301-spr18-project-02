<?php

// Create associative array val with index and command line arguments
$val = array();
$doubles = array();
$singles = array();
$flags = array();
$count = 0;
$dVal = false;
$firstVal = true;
$secondVal = false;
$characterOne = 'a';
$characterTwo = 'b ';

 function multiexplode ($delimiters,$string)
{
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}


foreach($argv as $a ){
    $val[] = $a;

    //Check if a is two ticks


  //Is the data a double, TWO TICKS
    if (strpos($a, '--') !== FALSE)   // Alright its a double now what
    {
        $exploded = multiexplode(array("--","=",","),$a);   // Gets rid of the specified characters and returns improved array
        print_r($exploded);                                // prints array

//        for ($i = 1; $i <= strlen($a);$i++)
//        {
//            $doubles[1] = $exploded[$i + 1];
//        }
//        print_r($doubles);
//        0
//        1   names
//        2   good
//
// foreach ($exploded as $e)
//        {
//            $doubles = [$exploded[1]] = $e;
//        }
    }
}

//Iterate through the elements on the console
//Check if the values are Double singles or flags
// Place values in designated array
// Displays val
foreach ($val as $index => $arg) {
    print("[$index] $arg\n");
}



