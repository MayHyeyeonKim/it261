<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency-form, if/else</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            
        }

        body {
            background: lightgray;
            vertical-align: middle;
            background-color: #dabfbf; 
            
        }

        form {
            max-width: 400px;
            margin: 20 px auto;
            border: 1px solid black;
            background-color: pink;
        }

        fieldset {
            padding: 10px;
            border: 1px solid green;
            max-width: 400px;
            padding-bottom: 20px;

        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type=text],
        input[type=email],
        input[type=number] {
            width: 100%;
            height: 30px;
            margin-bottom: 10px;
        }

        input[type=submit] {
            margin-bottom: 10px;
        }


        select {
            display: block;
            margin-bottom: 10px;
        }

        form ul {
            margin-bottom: 10px;
            list-style-type: none;
        }

        .box {
            width: 420px;
            padding: 10px;
            margin: 0 auto;
            margin: 20 px auto;
            padding-bottom: 30px;
        }


        .error {
            color: red;
            font-style: italic;
            text-align: center;
        }

        footer {
            height: 60px;
            line-height: 60px;
            background: #baa4a4;
            opacity: 50%;
            clear: both;
            padding: top;
        }

        footer ul {
            display: flex;
            justify-content: center;
            list-style-type: none;
        }

        footer li {
            justify-content: center;
            margin: 0 15px;
        }

        .video {
            width: 540px;
            height: 100%;
            object-fit: cover;
            display: flex;
            justify-content: center;
        }

        h2 {
            text-align: center;
        }

        p {
            text-align: center;
        }

        .message {
            text-align: center;
            font-size: 20px;
            margin-top: 20px;
        }

        .happy {
            display: block;
            margin: 0 auto;
            width: 560px;
        }

        .sad {
            display: block;
            margin: 0 auto;
            width: 560px;
        }
    </style>

</head>

<body>
    <h1> Currency4 - if/else - EXTRA CREDIT </h1>
    <!-- https://www.geeksforgeeks.org/how-to-prevent-xss-with-html-php/ -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <label>NAME</label>
            <input type="text" name="name" value="<?php if (isset($_POST['name']))
                echo htmlspecialchars($_POST['name']); ?>">

            <label>EMAIL</label>
            <input type="email" name="email" value="<?php if (isset($_POST['email']))
                echo htmlspecialchars($_POST['email']); ?>">

            <label>How much money do you have?</label>
            <input type="number" name="amount" value="<?php if (isset($_POST['amount']))
                echo htmlspecialchars($_POST['amount']); ?>">

            <!-- time for our radio buttom that has an additional attribute of value -->
            <label>Choose your currency</label>
            <ul>
                <li><input type="radio" name="currency" value="0.017" <?php
                if (isset($_POST['currency']) && $_POST['currency'] == 0.017)
                    echo 'checked="checked"'; ?>> Rubles </li>

                <li><input type="radio" name="currency" value="0.76" <?php
                if (isset($_POST['currency']) && $_POST['currency'] == 0.76)
                    echo 'checked="checked"'; ?>> Canadian Dollars </li>

                <li><input type="radio" name="currency" value="1.15" <?php
                if (isset($_POST['currency']) && $_POST['currency'] == 1.15)
                    echo 'checked="checked"'; ?>> Pounds </li>

                <li><input type="radio" name="currency" value="1.00" <?php
                if (isset($_POST['currency']) && $_POST['currency'] == 1.00)
                    echo 'checked="checked"'; ?>> Euros </li>

                <li><input type="radio" name="currency" value="0.0074" <?php
                if (isset($_POST['currency']) && $_POST['currency'] == 0.0074)
                    echo 'checked="checked"'; ?>> Yen </li>
            </ul>

            <label>Choose you banking institucion</label>

            <select name="bank">
                <option value="" NULL <?php if (
                    isset($_POST['bank'])
                    && $_POST['bank'] == NULL
                )
                    echo 'selected ="unselected"'; ?>>Select one!</option>

                <option value="boa" <?php if (
                    isset($_POST['bank'])
                    && $_POST['bank'] == 'boa'
                )
                    echo 'selected ="selected"'; ?>>Bank Of America</option>

                <option value="chase" <?php if (
                    isset($_POST['bank'])
                    && $_POST['bank'] == 'chase'
                )
                    echo 'selected ="selected"'; ?>>Chase Bank</option>

                <option value="banner" <?php if (
                    isset($_POST['bank'])
                    && $_POST['bank'] == 'banner'
                )
                    echo 'selected ="selected"'; ?>>Banner Bank</option>

                <option value="wells fargo" <?php if (
                    isset($_POST['bank'])
                    && $_POST['bank'] == 'wells fargo'
                )
                    echo 'selected ="selected"'; ?>>Wells Fargo</option>

                <option value="becu" <?php if (
                    isset($_POST['bank'])
                    && $_POST['bank'] == 'becu'
                )
                    echo 'selected ="selected"'; ?>>Boeing Credit Union</option>
            </select>

            <input type="submit" value="Convert it">

            <p><a href="">Reset it!</a></p>

        </fieldset>

    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (empty($_POST['name'])) {
            echo '<p class="error">Please fill out your name!</p>';
        }

        if (empty($_POST['email'])) {
            echo '<p class="error">Please fill out your email!</p>';
        }

        if (empty($_POST['amount'])) {
            echo '<p class="error">Please fill out your amount!</p>';
        }

        if (empty($_POST['currency'])) {
            echo '<p class="error">Please check your currency!</p>';
        }

        if ($_POST['bank'] == NULL) {
            echo '<p class="error">Please choose your banking institution!</p>';
        }

        if (
            isset($_POST['name'],
            $_POST['email'],
            $_POST['amount'],
            $_POST['currency'],
            $_POST['bank'])
        ) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $amount = floatval($_POST['amount']);
            $currency = floatval($_POST['currency']);
            $bank = $_POST['bank'];
            $dollars = $amount * $currency;

            if (!empty($name && $email && $amount && $currency && $bank)) {

                echo '

                <div class="box">

                <h2>Hello, ' . $name . '</h2>
                <p>You now have $' . number_format($dollars, 2) . ' American Dollars 
                and it will be deposited in <b>' . $bank . '</b> and we will email you at <b>
                ' . $email . '</b> in the next 24 hours!</p>
                </div>
                ';

                if ($dollars >= 10000) {
                    echo "<div class='box happy'>
                <h2> I am REALLY happy, because I have $$dollars American Dollars</h2>
                <iframe width='560' height='370'
                src='https://www.youtube.com/embed/O5APc0z49wg'>
                </iframe>
                </div>";
                            } else {
                                echo "<div class='box sad'>
                <h2>I am NOT happy because I have $$dollars American Dollars</h2>
                <iframe width='560' height='370'
                src='https://www.youtube.com/embed/l5aZJBLAu1E'>
                </iframe>
                </div>";
                            }
            }
        }
    }
    ?>
    </div>
    <footer>
<ul>
        <li>Copyright &copy;
            2024</li>
        <li>All Rights Reserved</li>
        <!-- <li><a href="../index.php">Web Design by May</a></li> -->
        <li><a id="html-checker" href="#">HTML Validation</a></li>
        <li><a id="css-checker" href="#">CSS Validation</a></li>
        </ul>
        
        <script>
                document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
                document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
        </script>  
</footer>
</body>

</html>