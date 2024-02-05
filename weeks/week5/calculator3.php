<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles2.css" type="text/css">
    <title>Calculator3.php</title>
</head>
    <h2> May's Travel Calculator3</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <label>NAME</label>
            <input type="text" name="name"
                value="<?php if (isset($_POST['name'])) {
                    echo htmlspecialchars($_POST['name']);
                } ?>">

            <label>Total miles driving?</label>
            <input type="miles" name="miles"
                value="<?php if (isset($_POST['miles'])) {
                    echo htmlspecialchars($_POST['miles']);
                } ?>">

            <label>How fast do you typically drive?</label>
            <input type="speed" name="speed"
                value="<?php if (isset($_POST['speed'])) {
                    echo htmlspecialchars($_POST['speed']);
                } ?>">

            <label>How many hours per day do you plan on driving?</label>
            <input type="hours" name="hours"
                value="<?php if (isset($_POST['hours'])) {
                    echo htmlspecialchars($_POST['hours']);
                } ?>">

            <label>Price of gas</label>
            <ul>
                <li><input type="radio" name="price" value="3.00" <?php if (isset($_POST['price']) && $_POST['price'] == 3.00) {
                    echo 'checked="checked"';
                } ?>> $3.00 </li>
                <li><input type="radio" name="price" value="3.50" <?php if (isset($_POST['price']) && $_POST['price'] == 3.50) {
                    echo 'checked="checked"';
                } ?>> $3.50 </li>
                <li><input type="radio" name="price" value="4.00" <?php if (isset($_POST['price']) && $_POST['price'] == 4.00) {
                    echo 'checked="checked"';
                } ?>> $4.00 </li>
            </ul>

            <label>Fuel efficiency</label>
            <select name="efficiency">
                <option value="" NULL <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == null) {
                    echo 'selected ="unselected"';
                } ?>>Select one!</option>
                <option value="10 mpg or less" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '10 mpg or less') {
                    echo 'selected ="selected"';
                } ?>>10 mpg or less</option>
                <option value="11 - 15 mpg" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '11 - 15 mpg') {
                    echo 'selected ="selected"';
                } ?>>11 - 15 mpg</option>
                <option value="16 - 20 mpg" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '16 - 20 mpg') {
                    echo 'selected ="selected"';
                } ?>>16 - 20 mpg</option>
                <option value="21 - 25 mpg" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '21 - 25 mpg') {
                    echo 'selected ="selected"';
                } ?>>21 - 25 mpg</option>
                <option value="26 - 30 mpg" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '26 - 30 mpg') {
                    echo 'selected ="selected"';
                } ?>>26 - 30 mpg</option>
                <option value="31 - 35 mpg" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '31 - 35 mpg') {
                    echo 'selected ="selected"';
                } ?>>31 - 35 mpg</option>
                <option value="36 - 40 mpg" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '36 - 40 mpg') {
                    echo 'selected ="selected"';
                } ?>>36 - 40 mpg</option>
                <option value="41 - 45 mpg" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '41 - 45 mpg') {
                    echo 'selected ="selected"';
                } ?>>41 - 45 mpg</option>
                <option value="46 mpg or more" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '46 mpg or more') {
                    echo 'selected ="selected"';
                } ?>>46 mpg or more</option>
            </select>

            <input type="submit" value="Calculate">
            <p><a href="">Reset</a></p>
        </fieldset>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (empty($_POST['name'])) {
            echo '<p class="error">Please fill out your name!</p>';
        }

        if (empty($_POST['miles'])) {
            echo '<p class="error">Please fill out your total driving miles!</p>';
        }

        if (empty($_POST['speed'])) {
            echo '<p class="error">Please fill out how fast will you be driving!</p>';
        }

        if (empty($_POST['hours'])) {
            echo '<p class="error">How many hours per day would you like to drive?</p>';
        }

        if (empty($_POST['price'])) {
            echo '<p class="error">Your cost of gas, please!</p>';
        }

        if ($_POST['efficiency'] == NULL) {
            echo '<p class="error">Please select your car\'s efficienc!</p>';
        }

        if (
            isset($_POST['name'],
            $_POST['miles'],
            $_POST['speed'],
            $_POST['hours'],
            $_POST['price'],
            $_POST['efficiency'])
        ) {
            $name = $_POST['name'];
            $miles = (int) $_POST['miles'];
            $speed = (int) $_POST['speed'];
            $hours = (int) $_POST['hours'];
            $gas = $_POST['price'];
            $efficiency = (int) $_POST['efficiency'];
            if ($efficiency == 0) {
                $efficiency = 1;
            }

            $usd = ($miles / $efficiency) * $gas;
            if ($speed == 0) {
                $speed = 1;
            }

            $drive_time = $miles / $speed;
            if ($hours == 0) {
                $hours = 1;
            }
            $day = ($drive_time / $hours);
            $fuel = $miles / $efficiency;

            if (
                !empty($name &&
                $miles && $speed && $hours && $gas && $efficiency)
            ) {

                echo '
                    <div class="box">
                        <h2>Hello ' . $name . '!</h2>
                        <p>Your trip would cost approximately <b> $' . number_format($usd, 2) . ' USD</b> 
                        <b> in gas expenses. <br>It would take <b><em>' . number_format($drive_time) . '
                        hrs</em></b> over a period of <b>' . number_format($day, 1) . '
                        days</b>, using <b>~' . number_format($fuel, 1)
                        . ' gallons</b> of gas in the process.</p>
                    </div>
                    ';
            }



        }

    } // end server request
    




    ?>

    </body>

</html>