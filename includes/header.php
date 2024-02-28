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

  case 'people.php':
      $title = 'Gallery Page';
      break;
}

$nav['website/daily.php'] = 'Switch';
$nav['website/troubleshoot.php'] = 'Troubleshoot';
$nav['website/calculator.php'] = 'Calculator';
$nav['website/contact.php'] = 'Contact';
$nav['website/gallery.php'] = 'Gallery';
$nav['website/project.php'] = 'Project';
// $nav['website/database.php'] = 'Database';
?>
<!DOCTYPE html>
<html lang="en">
      <nav>
        <ul>
          <?php
          foreach ($nav as $key => $value) {
            if (THIS_PAGE == $key) {
              echo '<li><a style = "color:red;" href=" ' . $key . '">' . $value . ' </a></li>';
            } else {
              echo '<li><a style = "color:white;" href=" ' . $key . '">' . $value . ' </a></li>';
            }
          }
          ?>
        </ul>
      </nav>