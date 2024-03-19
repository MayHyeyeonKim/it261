<?php
ob_start();  // prevents header errors before reading the whole page!
//define the page that we are on as the page
date_default_timezone_set('America/Los_Angeles');//sets timezone
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

$success = 'You have successfully logged on!!';
$errors = array();

function myError($myFile, $myLine, $errorMsg) {
    if(defined('DEBUG') && DEBUG) {
      echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
    }  else {
      echo ' Houston, we have a problem!';
      die();
    }  
}
switch (THIS_PAGE) {
    case 'index.php':
        $title1 = 'May\'s Home';
        $body = 'home';
        $headline = "May's final project for IT261";
        break;

    case 'about.php':
        $title1 = 'About May\'s DB Screenshots';
        $body = '';
        $headline = "Million Dollar Homes in Seattle";
        break;

    case 'daily.php':
        $title1 = 'May\'s Daily Page';
        $body = 'daily inner';
        $headline = "daily.php headline";
        break;

    case 'register.php':
        $title1 = 'May\'s Register Page';
        $body = 'login';
        $headline = 'Register Today!';
        break;

    case 'login.php':
        $title1 = 'May\'s Login Page';
        $body = 'login';
        $headline = 'Login';
        break;

    case 'contact.php':
        $title1 = 'May\'s Contact Page';
        $body = '';
        $headline = "Contact.php headline";
        break;

    case 'thx.php':
        $title1 = 'May\'s Thanks Page';
        $headline = "Thx.php headline";
        break;

    case 'project.php':
        $title1 = 'May\'s Project Page';
        $headline = "Project.php headline";
        break;

    case 'project-view.php':
        $title1 = 'May\'s Project View Page';
        $headline = "Project-view.php headline";
        break;

}

// my navigational array!
$nav = array(
    // '' => 'Home',
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
);

/* Index.php image page */
$photos[0] = 'shiba1';
$photos[1] = 'shiba2';
$photos[2] = 'shiba3';
$photos[3] = 'shiba4';
$photos[4] = 'shiba5';

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
    case 'Monday':
        $title = 'Starbucks Reserve Roastery';
        $pic = 'starbucks-reserve.jpg';
        $alt = 'Starbucks Reserve Roastery';
        $content = 'Located in the heart of Capitol Hill, the Starbucks Reserve Roastery is a must-visit for coffee enthusiasts. Experience unique small-batch coffees and a variety of brewing methods.';
        $pairing = 'Latte with a classic croissant';
        break;

    case 'Tuesday':
        $title = 'Caffe Vita';
        $pic = 'caffe-vita.jpg';
        $alt = 'Caffe Vita';
        $content = 'Caffe Vita has been a staple in the Seattle coffee scene since 1995. Known for its strong, smooth espresso and community involvement, it\'s a great place to experience the local vibe.';
        $pairing = 'Americano with a chocolate chip cookie';
        break;

    case 'Wednesday':
        $title = 'Stumptown Coffee Roasters';
        $pic = 'stumptown.jpg';
        $alt = 'Stumptown Coffee Roasters';
        $content = 'With its roots in Portland, Stumptown has made a name for itself in Seattle as well. Enjoy their famous cold brew or a classic espresso in a hip, relaxed setting.';
        $pairing = 'Frapuccino with a slice of cheesecake';
        break;

    case 'Thursday':
        $title = 'Seattle Coffee Works';
        $pic = 'seattle-coffee-works.jpg';
        $alt = 'Seattle Coffee Works';
        $content = 'Seattle Coffee Works offers a unique coffee-tasting experience with their slow bar. Take your time to savor different brews and learn about the coffee-making process.';
        $pairing = 'Cappuccino with a piece of tiramisu';
        break;

        case 'Friday':
            $title = 'Elm Coffee Roasters';
            $pic = 'elm-coffee.jpg';
            $alt = 'Elm Coffee Roasters';
            $content = 'Elm Coffee Roasters is known for its light-roasted coffee and modern, airy cafe space. Located in Pioneer Square, it\'s a great spot to enjoy a meticulously crafted pour-over or espresso.';
            $pairing = 'Espresso with a chocolate croissant';
            break;
        
        case 'Saturday':
            $title = 'Victrola Coffee Roasters';
            $pic = 'victrola-coffee.jpg';
            $alt = 'Victrola Coffee Roasters';
            $content = 'Victrola Coffee Roasters has been a staple in the Seattle coffee scene since 2000. With a focus on direct trade and single-origin coffees, their Capitol Hill cafe offers a cozy atmosphere for coffee lovers.';
            $pairing = 'Single-origin pour-over with a slice of banana bread';
            break;        

    case 'Sunday':
        $title = 'Storyville Coffee';
        $pic = 'storyville-coffee.jpg';
        $alt = 'Storyville Coffee';
        $content = 'Perched above Pike Place Market, Storyville Coffee offers stunning views along with their delicious coffee. Their warm, inviting atmosphere makes it the perfect spot to relax on a Sunday.';
        $pairing = 'Regular coffee with a bagel and cream cheese';
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
        } 
        } 

    if (empty($_POST['wines'])) {
        $wines_err = 'What... no wines?';
    } else {
        $wines = $_POST['wines'];
    }

    if (empty($_POST['regions'])) {
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
    Visitor: ' . $visitor . ' ' . PHP_EOL . '
    Programming Languege: ' . my_pLang($pLang, $pLangerr) . ' ' . PHP_EOL . '
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
