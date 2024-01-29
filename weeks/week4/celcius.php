<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/form.css" type="text/css" rel="stylesheet" />
    <title>Celcius Form</title>
</head>
<body class="celcius">
<h1> May's Celcius Converter </h1>
    <form action="<?php echo $_SERVER['PHP_SELF']    ;?>" method="post">
    <fieldset>
        <legend>May's Celcius Form</legend>
        <label>Enter your Celcius Value</label>
        <input type="number" name="cel">
        <input type="submit" value="Convert it">
        <p><a href="">Reset!</a></p>
    </fieldset>
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['cel'])) {
            $cel=$_POST['cel'];
            $int_cel=intval($cel);
            $far = ($int_cel*9/5)+32;
            // $far = floor(($int_cel*9/5)+32);
            
            if($cel==NULL) {
                echo'<p class="error">Please enter your Celcius Value!</P>';
            } elseif($far <=32) {
                echo '<p> '.$int_cel.' degrees celcius = '.$far.' degrees fahrenheit and its pretty cold</p>';
            } elseif ($far <=40) {
                echo '<p>'.$int_cel.' degrees celcius = '.$far.' degrees fahrenheit and it is still cold</p>';
            } elseif ($far <=50) {
                echo '<p>'.$int_cel.' degrees celcius = '.$far.' degrees fahrenheit and it is getting a bit warmer</p>';
            } elseif($far <=60) {
                echo '<p>'.$int_cel.' degrees celcius = '.$far.' degrees fahrenheit and it is getting to new seattle cold weather</p>';
    
            } elseif($far <=70) {
                echo '<p>'.$int_celcel.' degrees celcius = '.$far.' degrees fahrenheit and it is getting to old seattle cold weather </p>';
            } elseif($far <=80) {
                echo '<p>'.$int_cel.' degrees celcius = '.$far.' degrees fahrenheit and it is getting to new seattle warm weather</p>';
            } else {
                echo '<p>'.$int_cel.' degrees celcius = '.$far.' degrees fahrenheit and it is <span class="hot">Hot</span> seattle weather</p>';
            }
        }
    }
    ?>

</body>
</html>


