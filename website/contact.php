<?php
include('config.php');
include('./includes/header.php'); ?>
<div id="wrapper">
    <main>
        <h1>Welcome to May's Contact Page!</h1>
        <p>Thank you for visiting May's IT261 page. 
            If you have any questions or need more detailed information, please do not hesitate to contact me. 
            I am always ready to hear your valuable feedback.</p>
        <p>If you have any inquiries or comments, please send an email to the contact below or leave a message through the contact form located 
            at the bottom of the website. I will respond as soon as possible.</p>
        <p>Email: <a href="hkim7963@gmail.com">hkim7963@gmail.com</a><br></p>
        <p>I deeply appreciate your interest and support. I value your feedback and are committed to providing better services.</p>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <fieldset>
                <legend> Contact May </legend>

                <label>First Name</label>
                <input type="text" name="first_name" value="<?php if (isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">
                <span class="error"><?php echo $first_name_err; ?></span>

                <label>Last Name</label>
                <input type="text" name="last_name" value="<?php if (isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">
                <span class="error"><?php echo $last_name_err; ?></span>

                <label>Email</label>
                <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
                <span class="error"><?php echo $email_err; ?></span>

                <label>What is your role?</label>
                <ul>
                    <li><input type="radio" name="visitor" value="recruiter" <?php if(isset($_POST['visitor'])&&$_POST['visitor']=='recruiter') echo 'checked = "checked" ' ?> > Recruiter</li>
                    <li><input type="radio" name="visitor" value="programmer" <?php if(isset($_POST['visitor'])&&$_POST['visitor']=='programmer') echo 'checked = "checked" ' ?> > Programmer</li>
                    <li><input type="radio" name="visitor" value="webDev" <?php if(isset($_POST['visitor'])&&$_POST['visitor']=='webDev') echo 'checked = "checked" ' ?> > Web Developer</li>
                    <li><input type="radio" name="visitor" value="voyeur" <?php if(isset($_POST['visitor'])&&$_POST['visitor']=='voyeur') echo 'checked = "checked" ' ?> > A regular person checking out your site!</li>
                </ul>
                <span class="error"><?php echo $visitorErr; ?></span>

                <label>Phone</label>
                <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
                <span class="error"><?php echo $phone_err; ?></span>

                <label>What is your primary programming language? </label>
                <ul>
                    <li><input type="checkbox" name="pLang[]" value="js" <?php if(isset($_POST['pLang'])&& in_array('js', $pLang)) echo 'checked = "checked" ' ?> > JavaScript</li>
                    <li><input type="checkbox" name="pLang[]" value="php" <?php if(isset($_POST['pLang'])&& in_array('php', $pLang)) echo 'checked = "checked" ' ?> > PHP</li>
                    <li><input type="checkbox" name="pLang[]" value="python" <?php if(isset($_POST['pLang'])&& in_array('python', $pLang)) echo 'checked = "checked" ' ?> > Python</li>
                    <li><input type="checkbox" name="pLang[]" value="java" <?php if(isset($_POST['pLang'])&& in_array('java', $pLang)) echo 'checked = "checked" ' ?> > Java</li>
                    <li><input type="checkbox" name="pLang[]" value="c#" <?php if(isset($_POST['pLang'])&& in_array('c#', $pLang)) echo 'checked = "checked" ' ?> > C#</li>
                    <li><input type="checkbox" name="pLang[]" value="other" <?php if(isset($_POST['pLang'])&& in_array('other', $pLang)) echo 'checked = "checked" ' ?> > Other (include in comments)</li>
                </ul>
                <span class="error"><?php echo $pLangerr; ?></span>

                <label>Regions</label>
                <select name="regions">
                    <option value="" NULL <?php if (isset($_POST['regions']) && $_POST['regions']== NULL)echo 'selected = "unselected"'; ?>>Select One!</option>
                    <option value="nw" <?php if (isset($_POST['regions']) && $_POST['regions']== 'nw')echo 'selected = "selected"'; ?>>Northwest</option>
                    <option value="sw" <?php if (isset($_POST['regions']) && $_POST['regions']== 'sw')echo 'selected = "selected"'; ?>>Southwest</option>
                    <option value="mw" <?php if (isset($_POST['regions']) && $_POST['regions']== 'mw')echo 'selected = "selected"'; ?>>Midwest</option>
                    <option value="ec" <?php if (isset($_POST['regions']) && $_POST['regions']== 'ec')echo 'selected = "selected"'; ?>>East Coast!</option>
                    <option value="ne" <?php if (isset($_POST['regions']) && $_POST['regions']== 'ne')echo 'selected = "selected"'; ?>>Northeast!</option>
                </select>
                <span class="error"><?php echo $regions_err; ?></span>

                <label>Comments</label>
                <textarea name="comments"><?php if (isset($_POST['comments']))echo htmlspecialchars($_POST['comments']); ?></textarea><span class="error"><?php echo $comments_err; ?></span>

                <label>Privacy</label>
                <ul>
                    <li><input type="radio" name="privacy" value="yes" <?php if (isset($_POST['privacy'])&& $_POST['privacy'] == 'yes')echo 'checked = "checked" '; ?>>Privacy</li>
                </ul>
                <span class="error"><?php echo $privacy_err; ?></span>

                <input type="submit" value="Send it!">
                </fieldset>
                <p><a href="">Reset!</a></p>
        </form>

        <?php
        include('./includes/form.php'); ?>
    </main>

    <aside>
        <!-- <h3>This is my aside</h3> -->
        <h2>Weekly Class Exercises</h2>
            <h3>Week 2</h3>
            <ol>
                <li><a href="weeks/week2/var.php">var.php</a></li>
                <li><a href="weeks/week2/var2.php">var2.php</a></li>
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
            <h3>Week 5</h3>
            <ol>
                <li><a href="weeks/week5/calculator.php">calculator.php</a></li>
                <li><a href="weeks/week5/calculator2.php">calculator2.php</a></li>
                <li><a href="weeks/week5/calculator3.php">calculator3.php</a></li>
                <li><a href="weeks/week5/currency1.php">currency1.php</a></li>
                <li><a href="weeks/week5/currency2.php">currency2.php</a></li>
                <li><a href="weeks/week5/currency3.php">currency3.php</a></li>
                <li><a href="weeks/week5/currency4.php">currency4.php</a></li>
                <li><a href="weeks/week5/null.php">null.php</a></li>
            </ol>
            <h3>Week 6</h3>
            <ol>
                <li><a href="weeks/week6/form.php">form.php</a></li>
                <li><a href="weeks/week6/form2.php">form2.php</a></li>
                <li><a href="weeks/week6/functions.php">functions.php</a></li>
                <li><a href="weeks/week6/thx.php">thx.php</a></li>
            </ol>
            <h3>Week 7</h3>
            <ol>
                <li><a href="weeks/week7/form3.php">form3.php</a></li>
                <li><a href="weeks/week7/pictures.php">pictures.php</a></li>
                <li><a href="weeks/week7/rand.php">random.php</a></li>
                <li><a href="weeks/week7/strings.php">strings.php</a></li>
            </ol>
    </aside>
</div>
<!-- </body> -->
<!-- </html> -->
<?php include('./includes/footer.php');