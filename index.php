<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Portal page</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
    <h1><a href="index.php">May's Portal Page</a></h1>
    <h2>The navigation below represents our BIG Assignments. </h2>
    <div id="wrapper">
        <nav>
            <ul>
                <li><a href="./website/daily.php">Switch</a></li>
                <li><a href="">Troubleshoot</a></li>
                <li><a href="">Calculator</a></li>
                <li><a href="">Email</a></li>
                <li><a href="">Database</a></li>
                <li><a href="">Gallery</a></li>
            </ul>

        </nav>

        <main>
            <h2>About May</h2>
            <img class="right" src="images/me.jpg" alt="MayMe">
            <p>I came from Korea and currently reside in Seattle. I am in the process of learning to become a backend developer. 
                In Korea, I graduated with a Bachelor's degree in Fine Arts and completed my Master's degree.
                Donec posuere mauris quis vulputate suscipit. Nullam placerat et nulla eget vestibulum. Nunc imperdiet
                justo lacus, in gravida enim tincidunt nec. Sed maximus tempus tristique. Fusce id ipsum neque. Nullam
                dignissim turpis pulvinar arcu elementum aliquet. Curabitur quis urna tellus. Phasellus interdum, tellus
                non venenatis gravida, neque sem interdum velit, vel volutpat nisl metus eget justo.

            </p>

            <h3>MAMP Screenshots</h3>

            <img src="images/mamp1.png" alt="mamp screenshot">
            <br>
            <br>
            <img src="images/mamp2.png" alt="mamp screenshot">

        </main>


        <aside>
            <h2>Weekly Class Exercises</h2>
            <h3>Week 2</h3>
            <ol>
                <li><a href="weeks/week2/var.php">var.php</a></li>
                <li><a href="weeks/week2/vars2.php">vars2.php</a></li>
                <li><a href="weeks/week2/currency-logic.php">currency-logic.php</a></li>
                <li><a href="weeks/week2/currency.php">currency.php</a></li>
                <li><a href="weeks/week2/heredoc.php">heredoc.php</a></li>
            </ol>

            <h3>Week 3</h3>
            <ol>
                <li><a href="weeks/week3/if.php">if.php</a></li>
                <li><a href="weeks/week3/date.php">date.php</a></li>
                <li><a href="weeks/week3/for-each.php">for-each.php</a></li>
                <li><a href="weeks/week3/for-loop.php">for-loop.php</a></li>
                <li><a href="weeks/week3/switch.php">switch.php</a></li>
                <li><a href="website/index.php">index.php</a></li>
            </ol>

            <h3>Week 4</h3>
            <ol>
                <li><a href="weeks/week4/form-get.php">form-get.php</a></li>
                <li><a href="weeks/week4/form1.php">form1.php</a></li>
                <li><a href="weeks/week4/form2.php">form2.php</a></li>
                <li><a href="weeks/week4/form3.php">form3.php</a></li>
                <li><a href="weeks/week4/arithmetic-form.php">arithmetic-form.php</a></li>
                <li><a href="weeks/week4/celcius.php">celcius.php</a></li>
            </ol>




        </aside>

        <footer>
            <ul>
                <li>Copyright &copy; 2024

                </li>
                <li>All Rights Reserved </li>
                <li><a href="">Terms of use</a></li>
                <li><a href="index.php">Web Design by May(Hyeyeon)</a></li>

                <li> <a id="html-checker" href="#">Check HTML</a></li>
                <li><a id="css-checker" href="#">Check CSS</a></li>

            </ul>
            <script>
                document.getElementById("html-checker").setAttribute("href", "https://validator.w3.org/nu/?doc=" + location.href);
                document.getElementById("css-checker").setAttribute("href", "https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
            </script>

        </footer>
    </div>
    <!close wrapper-- -->
</body>

</html>