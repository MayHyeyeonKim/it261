<?php
session_start(); // Starts a new session or resumes an existing session to maintain user state across page requests.

include ('config.php');
include ('./includes/header.php');
?>

<div id="wrapper">
    <div id="image">
        <img src="images/seattle.png" alt="seattle">
    </div>

    <main class="index">
        <h1 class="center">
            <?= $headline ?>
        </h1>
        <ul>
            <li><strong>About:</strong> This section contains screenshots of my database, demonstrating the backend
                structure supporting the application.</li>
            <li><strong>Daily:</strong> This part of the website is an implementation of the Switch assignment. It
                features a daily showcase of Seattle's renowned coffee shops, curated by May.</li>
            <li><strong>Project:</strong> The Project section presents a gallery of million-dollar homes located in
                Seattle, offering insights into the luxury real estate market.</li>
            <li><strong>Contact:</strong> This page provides a way to get in touch, allowing for inquiries and further
                communication.</li>
        </ul>
</br>
        <p>Membership registration and login are required to access this website.</p>
    </main>
</div>

<?php include ('./includes/footer.php'); ?>