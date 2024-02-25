<!DOCTYPE html>
<html>

<head>
    <title>May's Adder Assignment | Week4</title>
    <link href="css/troubleshoot.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <h1>Adder.php</h1>
    <form action="" method="post">
        <label>Enter the first number:</label>
        <input type="number" name="num1"><br>
        <label>Enter the second number:</label>
        <input type="number" name="num2"><br>
        <input type="submit" value="Add Em!!">
    </form>

<?php     //adder-wrong.php

if (isset($_POST['num1'],$_POST['num2'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $myTotal = intval($num1) + intval($num2);
    
    //If empty, echo msg
    if (empty($_POST['num1']) || empty($_POST['num2'])) {
        echo 'Please fill out both number fields';
    } else {
        echo '<h2>You added '. $num1 .' and '.$num2.'<h2>';
        echo '<p class="red"> and the answer is: <br>'. $myTotal .'!</p>';
        echo'<p><a href="">Reset page</a>';
    }//end nest

} else {
    echo 'Please fill out number fields';
}//end isset
?>
</body>

</html>


<!-- <?php     //adder-wrong.php -->
// if (isset($_POST['num1'])){
// $num1 = $_POST['num1'];
// $num2 = $_POST['num2'];
// $myTotal -= $num1 + $Num2;
// echo '<h2>You added ". $num1 ." and .$num2. '"';
// echo ' <p> and the answer is <br>
// <style="color:red;">" $myTotal ."!"</p>;
// echo'<p><a href="">Reset page</a>'
// }
// <html>
// <head>
// <title>My Adder Assignment</title>
// <style>

// </style>
// </head>
// <body>
// <h1>Adder.php</h1> <\form action="">
// Enter the first number:</label><input type="text" name="Num1"><br>
// </label>Enter the second number:<input type="text" name="num2"><br>
// <input type="submit" value="Add Em!!> </form>

// Here Are the Errors:
    // - missing !doc declaration 
    // - PHP is typically enclosed with <?php and ?> tags for representation
    // - php closing tag out of place, has extra characters
    // - Styles should be either in the head section or linked to a separate CSS file
    // - missing  $_POST['num2'] in parameter in isset() on line 45
    // - No need for - in -=; otherwise, myTotal will hold a negative value on line 48
    // - intval() is used to convert strings to integers, often employed for user input or external data conversion
    // - To concatenate strings correctly, you need to use single quotes and variables appropriately on line 49
    // - The opening form tag should be <form action="/submit" method="post">, and the closing form tag should be </form> on line 62,65
    // - missing method attribute in the form tag on line 62
    // - missing opening label tag and improper opening label tag on line 63 and line 64
    // - type attribute in input should be number on line 63 and line 64
    // - name="Num1" should be name="num1" in input name attribute (No Capital letter) in line 63
    // - missing double quotation mark after !! on line 65