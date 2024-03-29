<?php
include 'config.php';
include './includes/header.php';
?>
<div id="wrapper">
<main>
    <h1>Welcome to may's People Database Class Exercise!</h1>
<?php
$sql = 'SELECT * FROM people';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    echo '
    <h2>Information about: '.$row['first_name'].'</h2>
    <ul>
    <li><b>First Name:</b> '.$row['first_name'].'</li>
    <li><b>Last Name:</b> '.$row['last_name'].'</li>
    <li><b>Birthday:</b> '.$row['birthdate'].'</li>
    </ul>
    <p>For more information about '.$row['first_name'].',
    click <a href="people-view.php?id='.$row['people_id'].' ">here</a></p>
    ';
    }
    } else {
    echo 'Nobody is home!';
    }
    @mysqli_free_result($result);
    @mysqli_close($iConn);
    ?>
    </main>
    <aside>
<!-- <h3>I will displaying my random images here!</h3>
<?php
$photos = array(
    'people1.jpg',
    'people2.jpg',
    'people3.jpg',
    'people4.jpg',
    'people5.jpg',
);

function random_image($photos)
{
    if (empty($photos)) {
        return '<p>No images available.</p>';
    }

    $index = rand(0, count($photos) - 1);
    $filename = $photos[$index];
    $filepath = 'images/' . $filename;

    if (!file_exists($filepath)) {
        return '<p>Image not found.</p>';
    }

    return '<img src="' . $filepath . '" alt="' . $filename . '">';
}

echo random_image($photos);
?> -->



</aside>
</div>
<!-- end wrapper -->

<?php
include './includes/footer.php';