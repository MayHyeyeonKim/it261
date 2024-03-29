<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>May's  first form in Week6!</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>

<body>
    <h1>May's  first form in Week6!</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <legend>
                Contact May
            </legend>
            <label for="">First Name</label>
            <input type="text" name="first_name"
                value="<?php if (isset($_POST['first_name']))
                    echo htmlspecialchars($_POST['first_name']); ?>">

            <label for="">Last Name</label>
            <input type="text" name="last_name"
                value="<?php if (isset($_POST['last_name']))
                    echo htmlspecialchars($_POST['last_name']); ?>">

            <label for="">Email</label>
            <input type="email" name="email"
                value="<?php if (isset($_POST['email']))
                    echo htmlspecialchars($_POST['email']); ?>">

            <label for="">Gender</label>
            <ul>
                <li><input type="radio" name="gender" value="female" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'female')
                    echo 'checked="checked" '; ?>> Female </li>
                <li><input type="radio" name="gender" value="male" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'male')
                    echo 'checked="checked" '; ?>> Male </li>
                <li><input type="radio" name="gender" value="neither" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'neither')
                    echo 'checked="checked" '; ?>> Neither </li>
            </ul>

            <label for="">Phone</label>
            <input type="tel" name="phone"
                value="<?php if (isset($_POST['phone']))
                    echo htmlspecialchars($_POST['phone']); ?>">

            <label for="">Favorite Wines</label>
            <ul>
                <li><input type="checkbox" name="wines[]" value="cab" <?php if (isset($_POST['wines']) && in_array('cab', $wines))
                    ; ?>>Cabernet</li>
                <li><input type="checkbox" name="wines[]" value="merlot" <?php if (isset($_POST['wines']) && in_array('merlot', $wines))
                    ; ?>>Merlot</li>
                <li><input type="checkbox" name="wines[]" value="syrah" <?php if (isset($_POST['wines']) && in_array('syrah', $wines))
                    ; ?>>Syrah</li>
                <li><input type="checkbox" name="wines[]" value="malbec" <?php if (isset($_POST['wines']) && in_array('malbec', $wines))
                    ; ?>>Malbec</li>
                <li><input type="checkbox" name="wines[]" value="red" <?php if (isset($_POST['wines']) && in_array('red', $wines))
                    ; ?>>Red Blend</li>
            </ul>

            <label>Regions</label>
            <select name="regions">
                <option value="" NULL <?php if (isset($_POST['regions']) && $_POST['regions']== NULL) echo 'selected = "unselected"'; ?>>Select One!</option>
                <option value="nw" <?php if (isset($_POST['regions']) && $_POST['regions']== 'nw') echo 'selected = "selected"'; ?>>Northwest</option>
                <option value="sw" <?php if (isset($_POST['regions']) && $_POST['regions']== 'sw') echo 'selected = "selected"'; ?>>Southwest</option>
                <option value="mw" <?php if (isset($_POST['regions']) && $_POST['regions']== 'mw') echo 'selected = "selected"'; ?>>Midwest</option>
                <option value="ne" <?php if (isset($_POST['regions']) && $_POST['regions']== 'ne') echo 'selected = "selected"'; ?>>Northeast</option>
                <option value="se" <?php if (isset($_POST['regions']) && $_POST['regions']== 'se') echo 'selected = "selected"'; ?>>Southeast</option>

            </select>

            <label>Comments</label>
            <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments'])  ;?></textarea>
            <label>Privacy</label>
            <ul>
                <li><input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy'])&& $_POST['privacy'] == 'yes' )  echo 'checked = "checked" ' ;?>>Yes</li>
            </ul>
            <input type="submit" value="Send it!">
            <p><a href="">Reset</a></p>
        </fieldset>
    </form>
</body>

</html>