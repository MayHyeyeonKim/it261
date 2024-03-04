<?php
include 'config.php';
include 'includes/header.php';
?>

<h1 style="text-align: center; margin-top: 5px;">May's Table of images HW 7</h1>
<h2 style="text-align: center; margin-top: 5px;">Spice Girls</h2>

<div class="gotomiddle">

    <table>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Nickname & Description</th>
        </tr>
        <?php foreach ($people as $name => $image): ?>
            <tr>
                <td><img src="images/<?php echo substr($image, 0, 5); ?>.png"
                        alt="<?php echo str_replace('_', ' ', $name); ?>"></td>
                <td>
                    <?php echo str_replace('_', ' ', $name); ?>
                </td>
                <td>
                    <?php echo substr($people[$name], strpos($people[$name], '_') + 1); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<?php include './includes/footer.php';