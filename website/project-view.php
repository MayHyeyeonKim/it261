<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
} else {
    header('Location:project.php');
}

$sql = 'SELECT * FROM dog_breeds WHERE id = ' . $id . '';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0) {
    //before we copy and past our while loops, we cannot output anything here
    while ($row = mysqli_fetch_assoc($result)) {
        $breed_name = $row['breed_name'];
        $origin = $row['origin'];
        $temperament = $row['temperament'];
        $image_path = $row['image_path'];
        $description = $row['description'];

        $feedback = '';

    } //close while loop
} else { //close if mysqli_num_rows
    $feedback = 'Error, we have a problem!';
}

include './includes/header.php';
?>

<div id="wrapper">
    <main class="breed-main">
        <h1>Welcome to <?=$breed_name?>'s page</h1>
    <div class="breed-content">
        <ul>
        <?php
echo '
            <li><b>Breed Name:</b> ' . $breed_name . '</li>
            <li><b>Origin:</b> ' . $origin . '</li>
            <li><b>Temperament:</b> ' . $temperament . '</li>


            ';
?>
        </ul>
        <?php
echo '
        <p> ' . $description . '</p>
        ';
?>
        <p>Content sourced from various dog breed websites</p>
        <p><a href="./project.php">Return to the project page</a></p>
    </div><!-- breed content end -->
    </main>

    <aside class="breed-aside">
        <h2>How <?=$breed_name?> looks like</h2>
        <img src="./images/<?=$image_path?>" alt="Image of <?=$breed_name?>">

    </aside>

</div><!-- End of wrapper -->

<?php
include './includes/footer.php';

?>
