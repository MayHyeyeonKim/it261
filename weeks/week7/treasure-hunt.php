<?php
$people['Donald_Trump'] = "trump_Former <del>President</del>... present defendant... <b>future resident of the 'poky'.</b>";
$people['Joe_Biden'] = 'biden_President from PA and <b>will probably run in \'24.</b>';
$people['Hilary_Clinton'] = 'clint_Secretary from NY.';
$people['Bernie_Sanders'] = 'sande_Senator from VT.';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>May's Week 7 - Treasure Hunt</title>
</head>
<body>
<h1>May's Week 7 - Treasure Hunt</h1>
<div class="gotomiddle">
    <table>
        <?php foreach($people as $name => $image): 
            $first_name = strtolower(substr($image, 0, strpos($image, '_')));
        ?>
        <tr>
            <td><img src="images/<?php echo $first_name; ?>.jpg" alt="<?php echo str_replace('_', ' ', $name); ?>" ></td>
            <td><?php echo str_replace('_', ' ', $name); ?></td>
            <td>
                <span class="details"><?php echo substr($image, strpos($image, '_') + 1); ?></span>
            </td>
            <td><img src="images/<?php echo $first_name; ?>2.png" alt="Second image of <?php echo str_replace('_', ' ', $name); ?>" ></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>