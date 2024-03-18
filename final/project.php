<?php
session_start();
include 'config.php';
include 'includes/header.php';
?>

<div id="wrapper">
    <main class="index">
        <h1>Welcome to Seattle's Million Dollar Homes List</h1>

        <table>
            <tr>
                <th>Address</th>
                <th>Price</th>
                <th>Bedrooms</th>
                <th>Bathrooms</th>
                <th>Square Feet</th>
                <th>Listing</th>
            </tr>

            <?php

            $sql = 'SELECT * FROM million_dollar_homes WHERE price >= 1000000;';

            $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

            $result = mysqli_query($iConn, $sql) or die(mysqli_error($iConn));

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>' . $row['address'] . '</td>';
                    echo '<td>$' . number_format($row['price'], 2) . '</td>';
                    echo '<td>' . $row['bedrooms'] . '</td>';
                    echo '<td>' . $row['bathrooms'] . '</td>';
                    echo '<td>' . $row['square_feet'] . ' sq ft</td>';
                    echo '<td><a href="project-view.php?id=' . $row['id'] . '">View Listing</a></td>';
                    echo '</tr>';
                }
            }
            ?>

        </table>
    </main>
    <aside>
        <h3>May's Info!</h3>
        <ul>
            <li>
                <a href="https://github.com/mayhyeyeonkim" title="Link to Github Profile">
                    GitHub Profile
                </a>
            </li>
            <li>
                <a href="https://github.com/mayhyeyeonkim/it261" title="Link to it261 GitHub repository">
                    it261 GitHub repository
                </a>
            </li>
        </ul>
    </aside>
</div><!-- End wrapper -->

<?php

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

include 'includes/footer.php';
?>
