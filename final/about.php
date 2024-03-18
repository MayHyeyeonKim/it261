<?php
//index page -> show session_start()
session_start();
include('config.php');
include('./includes/header.php');
?>

<div id="wrapper">
    
    <main class="index">
        <h2 class="center"><?=$headline?></h2>
        <img src="./images/million_dollar_sea.png" alt="million_dollar_sea.png">
        <p>Using PHP, the project page and the project-view page are generated using the information from the project table. (See table above) </p>
        <h2 class="center">Screenshot of Users Database</h2>
        <img src="./images/user_may.png" alt="user_may.png">
        <p>The user table gets updated whenever someone registers using PHP and MySQL. (See table above)</p>
    </main>
</div><!-- End wrapper -->
<?php include('./includes/footer.php');?>