<?php
// date function and if statement

// 'l': Returns the full name of the day (Sunday, Monday, etc.).
// 'F': Returns the full name of the month (January, February, etc.).
// 'j': Returns the day of the month as a number from 1 to 31.
// 'Y': Returns the year in 4 digits.
// 'h': Returns the time in 12-hour format (numeric value from 0 to 12).
// 'i': Returns the minutes as a two-digit number (numeric value from 00 to 59).
// 'A': Returns either AM or PM in uppercase.

echo date('Y');
echo '<br>';
echo date('l, F j, Y h:i: A');

echo '<br>';
date_default_timezone_set('America/Los_Angeles');

echo '<br>';
echo date('l, F j, Y h:i: A');

echo '<br>';
$name = 'May';
$our_time = date('H:i A');
echo '<br>';
echo $our_time;

// The logic behind this is, IF the time is less or equal to 11, then it is morning.
// If the time is less or equal to 17, which equal 5, then it is afternoon
// Now we will have an else, that will mean it is evening!

echo '<br>';
if($our_time <= 11){
    echo '<h2 style="color:red;">Good morning! '.$name.' </h2>
    <img src="../../images/morning.png" alt="morning">
    <p>It\'s time to get up!</p>
    ';
} elseif($our_time <= 17){
    // echo '<h2 style="color:green;">Good afternoon, '.$name.'</h2>';
    echo '<h2 style="color:green;">Good afternoon! '.$name.' </h2>
    <img src="../../images/afternoon.png" alt="afternoon">
    <p>It\'s time to get up!</p>
    ';
} else{
    // echo '<h2 style="color:blue;">Good evening!, '.$name.'</h2>';
    echo '<h2 style="color:blue;">Good evening! '.$name.' </h2>
    <img src="../../images/evening.png" alt="evening">
    <p>It\'s time to get up!</p>
    ';
}