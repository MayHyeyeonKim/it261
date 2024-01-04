<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page of my it261 PHP class - Website Project</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body class="home">
    <header>
        <div class="inner-header">
            <a href="index.php">
                <img id="logo" src="images/logo.png" alt="logo">
            </a>
            <!-- <nav>
<ul>
<li><a href="">Home</a></li>
<li><a href="">About</a></li>
<li><a href="">Daily</a></li>
<li><a href="">Project</a></li>
<li><a href="">Contact</a></li>
<li><a href="">Gallery</a></li>
</ul>
</nav> -->

            <nav>
                <ul>
                    <li><a class="current" href="index.php"> Home</a> </li>
                    <li><a href="about.php"> About</a> </li>
                    <li><a href="daily.php"> Daily</a> </li>
                    <li><a href="project.php"> Project</a> </li>
                    <li><a href="contact.php"> Contact</a> </li>
                    <li><a href="gallery.php"> Gallery</a> </li>
                </ul>
            </nav>

        </div>
        <!-- end inner header -->
    </header>
    <div id="wrapper">

        <div id="hero">
            <img src="images/twelve.jpg" alt="twelve">
        </div>
        <!-- end hero -->

        <main>
            <h1>Welcome to my first PHP journey!</h1>
            <h2>I am going to learn PHP!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut neque libero, cursus nec nisl ut, pretium
                posuere orci. Sed laoreet venenatis massa, in vulputate metus posuere sed. Suspendisse condimentum
                tempus consectetur. Morbi eget ex ipsum. Pellentesque interdum sollicitudin ex, vitae dictum est iaculis
                id. Ut ut maximus sapien, sit amet vulputate urna. Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Nulla vulputate consequat leo, et cursus ante. </p>
            <h2>Let's gooooo!!</h2>
            <p>Sed commodo ante ut libero luctus sagittis. Maecenas consequat, elit ut bibendum dignissim, dui est
                elementum tellus, a dignissim nibh ante quis nisi. Donec leo neque, dignissim at pretium in, dictum at
                magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
        </main>


        <aside>
            <h3>Class Exercises</h3>
            <h3>Week 1:</h3>
        <ul>
          <li>
            <a
              href="https://github.com/mayhyeyeonkim"
              title="Link to Github Profile"
            >
              GitHub Profile
            </a>
          </li>
          <li>
            <a
              href="https://github.com/mayhyeyeonkim/it261"
              title="Link to it261 GitHub repository"
            >
              it261 GitHub repository
            </a>

          </li>
        </ul>
        <h3>Week 2:</h3>
        <ul>
          <li><a href="" title="">var.php</a></li>
          <li><a href="" title="">var2.php</a></li>
          <li><a href="" title="">currency-logic.php</a></li>
          <li><a href="" title="">hereDoc.php</a></li>
        </ul>
        <h3>Week 3:</h3>
        <h3>Week 4:</h3>

        </aside>



    </div>
    <!-- end wrapper -->

    <footer>
        <ul>
            <li>Copyright &copy;
                2024</li>
            <li>All Rights Reserved</li>
            <li><a href="../index.php">Web Design by May(Hyeyeon) Kim</a></li>
            <li><a id="html-checker" href="#">HTML Validation</a></li>
            <li><a id="css-checker" href="#">CSS Validation</a></li>
        </ul>

        <script>
            document.getElementById("html-checker").setAttribute("href", "https://validator.w3.org/nu/?doc=" + location.href);
            document.getElementById("css-checker").setAttribute("href", "https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
        </script>

    </footer>

</body>

</html>