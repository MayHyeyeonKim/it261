<?php
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
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
}

$nav['daily.php'] = 'Switch';
$nav['troubleshoot.php'] = 'Troubleshoot';
$nav['calculator.php'] = 'Calculator';
$nav['email.php'] = 'Email';
$nav['gallery.php'] = 'Gallery';
$nav['database.php'] = 'Database';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    <?php echo $title; ?>
  </title>
  <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body class="<?php echo $body; ?>">
  <header>
    <div class="inner-header">
      <a href="index.php">
        <img id="logo" src="images/logo.png" alt="logo">
      </a>
      <!-- <nav>
<ul>
<li><a href="">Home</a></li>
<li><a href="">About</a></li>
<li><a href="">Daily</a></li>
<li><a href="">Project</a></li>
<li><a href="">Contact</a></li>
<li><a href="">Gallery</a></li>
</ul>
</nav> -->

      <nav>
        <ul>
          <?php
          foreach ($nav as $key => $value) {
            if (THIS_PAGE == $key) {
              echo '<li><a style = "color:red;" href=" ' . $key . '">' . $value . ' </a></li>';
            } else {
              echo '<li><a style = "color:green;" href=" ' . $key . '">' . $value . ' </a></li>';
            }
          } // end foreach
          ?>
        </ul>
      </nav>

    </div>
    <!-- end inner header -->
  </header>