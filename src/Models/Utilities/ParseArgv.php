<?php
/**
 * Created by PhpStorm.
 * Author DeArvis Troutman
 * Date: 2/17/2018
 *
 */
// Create associative array val with index and command line arguments
$val = array();
$doubles = array();
$singles = array();
$flags = array();
$clicker = 0;
$singlesCount = 1;
$singleAlert = false;
$doubleAlert = false;
$flagAlert = false;

foreach($argv as $a => $b ){
    //Get rid of the path that is included in the arguments as $a
    $val = str_replace("C:\Users\shadow\Desktop\Junior Semester Classes\Semester 2\Web Apps\PHP Parser\cinf301-spr18-project-02\cinf301-spr18-project-02\src\Models\Utilities", "", $a);
    $val2 = str_replace("\\ParseArgv.php","", $val);

 //   SINGLES ’T’ => 5 (1 argument) ’l’ => [0] ’val1’, [1] ’val2’, [2] ’val3’ (3 arguments)
    if (strpos($b, '-') !== false ) // Check to see if the length is smaller than 3
    {
////        $z = str_replace("-", "", $b);
//        $singles[] = $b;
//      // print_r($singles);
//       // echo (array_search('-',$argv));
//        print_r($singles);
//        $singleAlert = false;
    }


    //  If the next element in the array is a - then it is a single
    if (strpos($b, '-') !== false && strlen($b) < 3) // Check to see if the length is smaller than 3
    {
        $z = str_replace("-", "", $b);
        $flags[] = $z;
        $singleAlert = true;
    }



////    Is the data a double, TWO TICKS
    if (strpos($b, '--') !== FALSE)   // Alright its a double now what
    {
        $tempTwo;
        $temp = explode("=", $b);
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
    $doubleAlert = true;
    }







    // End of for loop
    }
if ($flagAlert == true)
{
    echo ("FLAG \n" );
    print_r($flags);
}
if ($singleAlert == true) //Unsure how to check if the
{
    //echo ('SINGLES');
    //print_r($singles);
}
if ($doubleAlert== true)
{
    echo ("DOUBLES \n" );
    print_r($doubles);
}
//echo("");
//print_r($doubles);
print_r($flags); // Print FLAGS Before













