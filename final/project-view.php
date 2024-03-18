<?php
session_start();
include 'config.php';

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: project.php');
}

$sql = 'SELECT * FROM million_dollar_homes WHERE id = ' . $id . '';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $address = $row['address'];
        $price = $row['price'];
        $bedrooms = $row['bedrooms'];
        $bathrooms = $row['bathrooms'];
        $square_feet = $row['square_feet'];
        $listing_url = $row['listing_url'];

        $feedback = '';
    }
} else {
    $feedback = 'Error, we have a problem!';
}

include './includes/header.php';
?>

<div id="wrapper">
    <main class="home-main">
        <h1>Welcome to the page for <?=$address?></h1>
        <div class="home-content">
            <ul>
                <?php
                echo '
                <li><b>Address:</b> ' . $address . '</li>
                <li><b>Price:</b> $' . number_format($price, 2) . '</li>
                <li><b>Bedrooms:</b> ' . $bedrooms . '</li>
                <li><b>Bathrooms:</b> ' . $bathrooms . '</li>
                <li><b>Square Feet:</b> ' . $square_feet . ' sq ft</li>
                ';
                ?>
            </ul>
            <p><a href="<?=$listing_url?>">View Full Listing</a></p>
            <p><a href="index.php">Return to the main page</a></p>
        </div>
    </main>
</div>

<?php
include './includes/footer.php';
?>
