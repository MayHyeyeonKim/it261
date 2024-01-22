<?php
// this file will demostrate for loops and in addition to placing your php inside your HTML!!!
// The for loop - Loops through a block of code a specified number of times.
// for (init counter; test counter; increment counter) { code to be executed for each iteration; }

// celcius and fahrenheit

// $far = ($celsius * 9/5) + 32; 
// nine over five
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My celcius table</title>
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing:border-box;
        }
        table{
            width:500px;
            margin:20px auto;
            border-collapse: collapse;
            border: 1px solid lightblue;
        }
        td, th {
            border-collapse: collapse;
            border: 1px solid lightblue;
            padding: 5px;
        }

        h1, h2 {
            text-align: center;
            margin: 10px 0;
            color: green;
        }
    </style>
</head>
<body>
    <h1>My Celcius / Fahrenheiet Table </h1>
    <table>
        <tr>
            <th>Celcius</th>
            <th>Fahrenheiet</th>
        </tr>
        <?php
        for($cel = 0; $cel <= 100; $cel += 3){
            $far = ($cel * 9/5) + 32;
            echo '<tr>';
            echo '<td> '.$cel.' degrees </td>';
            echo '<td> '.$far.' degrees </td>';
            echo '</tr>';
        }
        ?>
    </table>
    <br>
    <table>
        <tr>
            <th>Celcius</th>
            <th>Fahrenheiet</th>
        </tr>
        <?php
        for($cel = 0; $cel <= 100; $cel += 3){
            $far = ($cel * 9/5) + 32;
            echo '<tr>';
            echo '<td> '.$cel.' degrees </td>';
            echo '<td> '.intval($far).' degrees </td>';
            echo '</tr>';
        }
        ?>
    </table>

    <h2>completed a kilometer/mileage table on my own!</h2>
    <table>
        <tr>
            <th>Kilometer</th>
            <th>mileage</th>
        </tr>
        <?php
        for($mil = 0; $mil <= 20; $mil += 1){
            // $mil = ($km * 0.6213);
            // Kilometers=Miles×1.60934
            $km = $mil * 1.60934;
        echo '<tr>';
        echo '<td> '.$km.' distance </td>';
        echo '<td> '.$mil.' distance </td>';
        echo '</tr>';
        }
        
        ?>
    </table>
</body>
</html>