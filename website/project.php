<?php
include 'config.php';
include 'includes/header.php';
/*
how we created our table:
CREATE TABLE dog_breeds (
id INT(6) AUTO_INCREMENT PRIMARY KEY,
breed_name VARCHAR(30) NOT NULL,
origin VARCHAR(30) NOT NULL,
temperament VARCHAR(255) NOT NULL,
image_path VARCHAR(255),
description longtext
)
CHARACTER SET utf8mb4  COLLATE utf8mb4_unicode_ci;

 */
?>
<div id="wrapper">

    <main class="index">
    <h1>Welcome to my database on dog breeds</h1>

    <table>
                <tr>
                    <th>Dog Breed</th>
                    <th>Origin</th>
                    <th>Temperament</th>
                    <th>More Information</th>
                </tr>

        <?php

$sql = 'SELECT * FROM dog_breeds';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0) {
    //-- associative array $row

    while ($row = mysqli_fetch_assoc($result)) {
        echo '
                <tr>
                    <td><b>' . $row['breed_name'] . '</b></td>
                    <td>' . $row['origin'] . '</td>
                    <td>' . $row['temperament'] . '</td>
                    <td><p>For more information about ' . $row['breed_name'] . ' <br>Click <a href="project-view.php?id=' . $row['id'] . '" >here</a></p></td>
                </tr>';

    } // close while loop

} //close if statment

?>

        </table>
    </main>
</div><!-- End wrapper -->

<?php

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

include 'includes/footer.php'
?>