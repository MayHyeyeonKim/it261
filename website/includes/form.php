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
                    <li><input type="radio" name="visitor" value="voyeur" <?php if(isset($_POST['visitor'])&&$_POST['visitor']=='voyeur') echo 'checked = "checked" ' ?> > Other</li>
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