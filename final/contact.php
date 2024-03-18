<?php
//index page -> show session_start()
session_start();
include('config.php');
include('./includes/header.php');
?>
<div id="wrapper">
    <main>
        <h1>Welcome to May's Contact Page!</h1>
        <p>Thank you for visiting May's IT261 page.
            If you have any questions or need more detailed information, please do not hesitate to contact me.
            I am always ready to hear your valuable feedback.</p>
        <p>If you have any inquiries or comments, please send an email to the contact below or leave a message through
            the contact form located
            at the bottom of the website. I will respond as soon as possible.</p>
        <p>Email: <a href="hkim7963@gmail.com">hkim7963@gmail.com</a><br></p>
        <p>I deeply appreciate your interest and support. I value your feedback and are committed to providing better
            services.</p>

        <?php
        include('./includes/form.php'); ?>
    </main>

    <aside>
        <h3>May's Info!</h3>
        <ul>
            <li>
                <a href="https://github.com/mayhyeyeonkim" title="Link to Github Profile">
                    GitHub Profile
                </a>
            </li>
            <li>
                <a href="https://github.com/mayhyeyeonkim/it261" title="Link to it261 GitHub repository">
                    it261 GitHub repository
                </a>
            </li>
        </ul>
    </aside>
</div>
<!-- </body> -->
<!-- </html> -->
<?php include('./includes/footer.php');