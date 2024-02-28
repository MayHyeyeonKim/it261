<?php
ob_start();
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch (THIS_PAGE) {
    // case '':
    //     $title = 'May\'s Home';
    //     $body = 'home';
    //     break;

    case 'index.php':
        $title = 'May\'s Home';
        $body = 'home';
        break;

    case 'about.php':
        $title = 'About Page';
        break;

    case 'daily.php':
        $title = 'May\'s Daily Page';
        $body = 'daily inner';
        break;

    case 'Troubleshoot.php':
        $title = 'Troubleshoot Page';
        break;

    case 'contact.php':
        $title = 'May\'s Contact Page';
        $body = 'contact inner';
        break;

    case 'gallery.php':
        $title = 'Gallery Page';
        break;

    case 'thx.php':
        $title = 'Thanks Page';
        break;
    
    case 'people.php':
        $title = 'People Page';
        break;

}

// my navigational array!
$nav = array(
    // '' => 'Home',
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'gallery.php' => 'Gallery',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
);

/* Index.php image page */
$photos[0] = 'shiba1';
$photos[1] = 'shiba2';
$photos[2] = 'shiba3';
$photos[3] = 'shiba4';
$photos[4] = 'shiba5';

function random_images($photos) {
    $my_return = '';
    $i = rand(0,4);
    $selected_image = ''.$photos[$i].'.png'; 
    return $my_return = '<img src="images/'.$selected_image.'" class="shiba" alt="'.$photos[$i].'">';
}

function make_links($nav)
{
    $my_return = '';
    foreach ($nav as $key => $value) {
        if (THIS_PAGE == $key) {
            $my_return .= '<li><a class="current" href="' . $key . '"> 
    ' . $value . '</a></li>';
        } else {
            $my_return .= '<li><a style="color:green;" href=" ' . $key . '"> 
    ' . $value . '</a></li>';
        }
    }  // end foreach
    return $my_return;
}  // end function

// this is the beginning of the switch for homework 3
if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}
// echo $today;

switch ($today) {
    case 'Friday':
        $coffee = '<h2>Friday is our Pumpkin Latte Day!</h2>';
        $pic = 'pumpkin.png';
        $alt = 'Pumpkin Latte';
        $content = '<p>The moment Fall hits, we rush to our local coffee shop and order 
    <b>a pumpkin spice latte</b>. We love them so much, we took it upon ourselves 
    to try making it at home. This recipe is easy and I bet you have most, 
    if not everything, you need to make it at home right now. It also 
    comes together in under 10 minutes!</p>';
        break;

    case 'Saturday':
        $coffee = '<h2>Saturday is our Green Tea Latte Day!</h2>';
        $pic = 'greentea-latte.png';
        $alt = 'Green Tea';
        $content = '<p> <b>A green tea latte is simply a latte</b> made with green tea 
    instead of espresso. Traditional lattes are a blend of steamed milk 
    and espresso, but in a green tea latte, we remove the coffee 
    and use tea in its place.</p>';
        break;

    case 'Sunday':
        $coffee = '<h2>Sunday is our Regular Joe Day!</h2>';
        $pic = 'coffee.png';
        $alt = 'Regular Coffee';
        $content = '<p> Boston commuters have their routines timed down 
    to the minute. Most folks can tell if they\'ll be late to work 
    by the length of the line at Dunkin\' Donuts.
    That\'s why “coffee regular" is such a comforting phrase.
    For anyone who\'s lived here more than a week,
    “coffee regular" means “coffee with cream and sugar.</p>';
        break;

    case 'Monday':
        $coffee = '<h2>Monday is our Latte Day!</h2>';
        $pic = 'latte.png';
        $alt = 'Our Latte';
        $content = '<p> <b>Caffè latte</b>
    often shortened to just latte in English, 
    is a coffee beverage of Italian origin made with espresso 
    and steamed milk. Variants include the chocolate-flavored 
    mocha or replacing the coffee with another beverage base 
    such as masala chai (spiced Indian tea), mate, matcha, 
    turmeric or rooibos; alternatives to milk, 
    such as soy milk or almond milk, are also used.</p>';
        break;

    case 'Tuesday':
        $coffee = '<h2>Tuesday is our Americano Day!</h2>';
        $pic = 'americano.png';
        $alt = 'Americano';
        $content = '<p> <b>Caffè Americano</b> is a type of coffee drink 
    prepared by diluting an espresso with hot water, 
    giving it a similar strength to, but different flavor from, 
    traditionally brewed coffee. Its strength varies with the 
    number of shots of espresso and amount of water added.</p>';
        break;

    case 'Wednesday':
        $coffee = '<h2>Wednesday is our Frapuccino!</h2>';
        $pic = 'frap.png';
        $alt = 'Our Frapuccino';
        $content = '<p> <b>Frappuccino</b> is a line of blended iced 
    coffee drinks sold by Starbucks. It consists of coffee or crème base, 
    blended with ice and ingredients such as flavored 
    syrups and usually topped with whipped cream and or spices.</p>';
        break;

    case 'Thursday':
        $coffee = '<h2>Thursday is our Capuccino Day!</h2>';
        $pic = 'cap.png';
        $alt = 'Our Capuccino';
        $content = '<p> <b>A cappuccino</b> is an espresso-based coffee drink 
    that originated in Austria and was later popularized in Italy 
    and is prepared with steamed milk foam. Variations of the drink 
    involve the use of cream instead of milk, using non-dairy milk 
    substitutes and flavoring with cinnamon or chocolate powder.</p>';
        break;

}

//my Contact's PHP

$first_name = '';
$last_name = '';
$email = '';
$wines = '';
$phone = '';
$regions = '';
$gender = '';
$comments = '';
$privacy = '';
$visitor = '';
$pLang = '';

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$wines_err = '';
$phone_err = '';
$regions_err = '';
$gender_err = '';
$comments_err = '';
$privacy_err = '';
$visitorErr = '';
$pLangerr = '';

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
        } // end main i

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

    if (empty($_POST['visitor'])) {
        $visitorErr = 'Please enter your role';
    } else {
        $visitor = $_POST['visitor'];
    }

    if (empty($_POST['pLang'])) {
        $pLangerr = 'Please enter your programming language';
    } else {
        $pLang = $_POST['pLang'];
    }

    function my_pLang($pLang, &$pLangerr)
    {
        $my_return = '';
        if (!empty($pLang)) {
            $my_return = implode(', ', $pLang);
        } else {
            $pLangerr = 'Select at least 1 programming language';
        }
        return $my_return;
    }

    function my_wines($wines, &$wines_err)
    {
        $my_return = '';
        if (!empty($wines)) {
            $my_return = implode(', ', $wines);
        } else {
            $wines_err = 'Please choose a wine';
        }
        return $my_return;
    }

    if (
        isset($_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['regions'],
        $_POST['comments'],
        $_POST['privacy'],
        $_POST['visitor'],
        $_POST['pLang'],
    )
    ) {
        // $to = 'hkim7963@gmail.com';
        $to = 'szemeo@mystudentswa.com';
        $subject = 'Test email on ' . date('m/d/y, h i A');
        $body = '
    First Name: ' . $first_name . ' ' . PHP_EOL . '
    Last Name: ' . $last_name . ' ' . PHP_EOL . '
    Email: ' . $email . ' ' . PHP_EOL . '
    Gender: ' . $gender . ' ' . PHP_EOL . '
    Phone Number: ' . $phone . ' ' . PHP_EOL . '
    Regions: ' . $regions . ' ' . PHP_EOL . '
    Comments: ' . $comments . ' ' . PHP_EOL . '
    visitor: ' . $visitor . ' ' . PHP_EOL . '
    pLang: ' . my_pLang($pLang, $pLangerr) . ' ' . PHP_EOL . '
    ';

        $headers = array(
            'From' => 'no-reply@maybemay.edu',
        );

        if (
            !empty($first_name &&
            $last_name &&
            $visitor &&
            $pLang &&
            $regions &&
            $email &&
            $phone &&
            $comments &&
            $privacy &&
            preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        ) {
            mail($to, $subject, $body, $headers);
            header('Location:thx.php');
        }
    }

}
