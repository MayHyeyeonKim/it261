<?php
include('config.php');
include('includes/header.php');
?>

<style>
body {
    font-family: Arial, sans-serif;
}

h1, h2 {
    text-align: center;
}

.subheading {
    text-align: center;
    margin-top: 5px;
    font-size: 20px;
}

.gotomiddle {
    margin: auto;
    width: 80%;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

img {
    display: block;
    max-width: 100px; /* Adjust based on your preference */
    height: auto;
    margin: auto;
}

footer {
    margin-top: 30px;
    text-align: center;
}

footer ul {
    list-style: none;
    padding: 0;
}

footer li {
    display: inline;
    margin-right: 10px;
}
</style>

<h1>May's Table of images HW 7</h1>
<h2>Spice Girls</h2>
<p style="text-align: center; margin-top: 5px; font-size: 20px;">The Spice Girls are an English girl group formed in 1994, consisting of Melanie Brown, Melanie Chisholm, Emma Bunton, Geri Halliwell and Victoria Beckham.</p>
<p class="subheading">Each member of the Spice Girls is known by a unique nickname:</p>
<ul style="text-align: center; margin-top: 5px; font-size: 20px;">
<li>Melanie Brown - "Scary Spice"</li>
<li>Melanie Chisholm - "Sporty Spice"</li>
<li>Emma Bunton - "Baby Spice"</li>
<li>Geri Halliwell - "Ginger Spice"</li>
<li>Victoria Beckham - "Posh Spice"</li>

</ul>

    <div class= "gotomiddle">
        
        <table>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Nickname & Description</th>
        </tr>
        <?php foreach($people as $name => $image)   :?>
        <tr>
            <td><img src="images/<?php echo substr($image, 0, 5);?>.png" 
            alt="<?php echo str_replace('_', ' ', $name)     ;?>" ></td>
            <td><?php echo str_replace('_', ' ', $name)     ;?></td>
            <td><?php echo substr($people[$name], strpos($people[$name], '_') + 1)     ;?></td>
        </tr>
        <?php endforeach ; ?>
        </table>
</div>

<footer>
<ul>
        <li>Copyright &copy;
            2024</li>
        <li>All Rights Reserved</li>
        <li><a href="../index.php">Web Design by May</a></li>
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