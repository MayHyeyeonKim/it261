<?php
session_start(); // Starts a new session or resumes an existing session to maintain user state across page requests.

include('config.php');
include('./includes/header.php');
?>

<div id="wrapper">
    <div id="image">
        <img src="images/seattle.png" alt="seattle">
    </div>

    <main class="index">
        <h1 class="center"><?=$headline?></h1>
        <p>This website is the final project for the IT261 class during the winter quarter of 2024. The "Daily" section is an application of the Switch assignment, where we will explore Seattle's famous coffee shops with May throughout the week. The "Project" section lists homes in Seattle that are worth over a million dollars.</p>
        <p>Membership registration and login are required to access this website.</p>
    </main>
</div>

<?php include('./includes/footer.php');?>
