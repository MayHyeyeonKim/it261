<?php
ob_start();

$first_name = '';
$last_name = '';
$email = '';
$wines = '';
$phone = '';
$regions = '';
$gender = '';
$comments = '';
$privacy = '';
$first_name_err = '';
$last_name_err = '';
$email_err = '';
$wines_err = '';
$phone_err = '';
$regions_err = '';
$gender_err = '';
$comments_err = '';
$privacy_err = '';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['first_name'])) {
        $first_name_err = 'Please enter your first name';
    } else {
        $first_name = $_POST['first_name'];
    }

    if (empty($_POST['last_name'])) {
        $last_name_err = 'Please enter your last name';
    } else {
        $last_name = $_POST['last_name'];
    }

    if (empty($_POST['email'])) {
        $email_err = 'Please enter your e-mail';
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['gender'])) {
        $gender_err = 'Please choose your gender';
    } else {
        $gender = $_POST['gender'];
    }

    // if (empty($_POST['phone'])) {
    //     $phone_err = 'Please enter your phone number';
    // } else {
    //     $phone = $_POST['phone'];
    // }

    if(empty($_POST['phone'])) { // if empty, type in your number
        $phone_err = 'Your phone number please!';
        } elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
        $phone_err = 'Invalid format!';
        } else{
        $phone = $_POST['phone'];
        } // end else
        } // end main if

    if (empty($_POST['wines'])) {
        $wines_err = 'What... no wines?';
    } else {
        $wines = $_POST['wines'];
    }

    if ($_POST['regions'] == NULL) {
        $regions_err = 'Please select your region';
    } else {
        $regions = $_POST['regions'];
    }

    if (empty($_POST['comments'])) {
        $comments_err = 'Your comments, please!!';
    } else {
        $comments = $_POST['comments'];
    }

    if (empty($_POST['privacy'])) {
        $privacy_err = 'You cannot pass go!';
    } else {
        $privacy = $_POST['privacy'];
    }
    function my_wines($wines)
    {
        $my_return = '';
        if (!empty($_POST['wines'])) {
            $my_return = implode(', ', $_POST['wines']);
        } else {
            $wines_err = 'Please choose a wine';
        }
        return $my_return;
    }

    if (
        isset($_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['gender'],
        $_POST['phone'],
        $_POST['regions'],
        $_POST['wines'],
        $_POST['comments'],
        $_POST['privacy'])
    ) {
        $to = 'hkim7963@gmail.com';
        $subject = 'Test email on ' . date('m/d/y, h i A');
        $body = '
    First Name: ' . $first_name . ' ' . PHP_EOL . '
    Last Name: ' . $last_name . ' ' . PHP_EOL . '
    Email: ' . $email . ' ' . PHP_EOL . '
    Gender: ' . $gender . ' ' . PHP_EOL . '
    Phone Number: ' . $phone . ' ' . PHP_EOL . '
    Regions: ' . $regions . ' ' . PHP_EOL . '
    Wines: ' . my_wines($wines) . ' ' . PHP_EOL . '
    Comments: ' . $comments . ' ' . PHP_EOL . '
    ';

    $headers = array(
        'From' => 'no-reply@maybemay.edu',
        // 'Reply to:' => '' . $email . ''
    );

        if (
            !empty($first_name &&
            $last_name &&
            $gender &&
            $wines &&
            $regions &&
            $email &&
            $phone &&
            $comments &&
            preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        ) {

            mail($to, $subject, $body, $headers);
            header('Location:thx.php');
        }
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <title>May's form3 in Week7 - Phone Validation!</title>
</head>

<body>
<h1>May's form in Week7 - Phone Validation!</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <legend>Contact Isaac</legend>

            <label>First Name</label>
            <input type="text" name="first_name"
                value="<?php if (isset($_POST['first_name']))
                    echo htmlspecialchars($_POST['first_name']); ?>">
            <span class="error">
                <?= $first_name_err ?>
            </span>

            <label>Last Name</label>
            <input type="text" name="last_name"
                value="<?php if (isset($_POST['last_name']))
                    echo htmlspecialchars($_POST['last_name']); ?>">
            <span class="error">
                <?= $last_name_err ?>
            </span>

            <label>Email</label>
            <input type="email" name="email"
                value="<?php if (isset($_POST['email']))
                    echo htmlspecialchars($_POST['email']); ?>">
            <span class="error">
                <?= $email_err?>
            </span>

            <label>Gender</label>

            <ul>
                <li><input type="radio" name="gender" value="female" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'female')
                    echo 'checked = "checked" ' ?>>Female</li>

                    <li><input type="radio" name="gender" value="male" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'male')
                    echo 'checked = "checked" ' ?>>Male</li>

                    <li><input type="radio" name="gender" value="neither" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'neither')
                    echo 'checked = "checked" ' ?>>Neither
                    </li>
                </ul>
                <span class="error">
                <?= $gender_err?>
            </span>

            <label>Phone</label>
            <input type="tel" name="phone" placeholder="xxx-xxx-xxxx"
                value="<?php if (isset($_POST['phone']))
                    echo htmlspecialchars($_POST['phone']); ?>">
            <span class="error">
                <?= $phone_err?>
            </span>

            <label>Favorite Wines</label>

            <ul>
                <li><input type="checkbox" name="wines[]" value="cab" <?php if (isset($_POST['wines']) && in_array('cab', $wines))
                    echo 'checked = "checked" ' ?>>Cabernet</li>

                    <li><input type="checkbox" name="wines[]" value="merlot" <?php if (isset($_POST['wines']) && in_array('merlot', $wines))
                    echo 'checked = "checked" ' ?>>Merlot</li>

                    <li><input type="checkbox" name="wines[]" value="syrah" <?php if (isset($_POST['wines']) && in_array('syrah', $wines))
                    echo 'checked = "checked" ' ?>>Syrah</li>

                    <li><input type="checkbox" name="wines[]" value="malbec" <?php if (isset($_POST['wines']) && in_array('malbec', $wines))
                    echo 'checked = "checked" ' ?>>Malbec</li>
                </ul>

                <span class="error">
                <?= $wines_err ?>
            </span>

            <label>Region</label>
            <select name="regions">
                <option value="" NULL <?php if (isset($_POST['regions']) && $_POST['regions'] == NULL)
                    echo 'selected = "unselected" '; ?>>Select one</option>

                <option value="nw" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'nw')
                    echo 'selected = "selected" '; ?>>Northwest</option>

                <option value="sw" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'sw')
                    echo 'selected = "selected" '; ?>>Southwest</option>

                <option value="mw" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'mw')
                    echo 'selected = "selected" '; ?>>Midwest</option>

                <option value="se" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'se')
                    echo 'selected = "selected" '; ?>>Southeast</option>

            </select>
            <span class="error">
                <?= $regions_err ?>
            </span>

            <label>Comments</label>
            <textarea
                name="comments"><?php if (isset($_POST['comments']))
                    echo htmlspecialchars($_POST['comments']); ?></textarea>
            <span class="error">
                <?= $comments_err ?>
            </span>

            <label>Privacy</label>

            <ul>
                <li><input type="radio" name="privacy" value="yes" <?php if (isset($_POST['privacy']) && $_POST['privacy'] == 'yes')
                    echo 'checked = "checked" ' ?>>You must
                        agree!</li>
                </ul>
                <span class="error">
                <?= $privacy_err ?>
            </span>

            <input type="submit" value="Send it!">
        </fieldset>
        <p><a href="">Reset</a></p>
    </form>

    <?php




    ?>

</body>

</html>