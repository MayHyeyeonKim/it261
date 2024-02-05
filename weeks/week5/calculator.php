<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles2.css" type="text/css">
    <title>Calculator.php</title>
</head>
<body>
    <h2> May's Travel Calculator</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>
    <label>Name</label>
    <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ;?>">
    <label>Total miles driving?</label>
    <input type="miles" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']) ;?>">
    <label>How fast do you typicallu drive?</label>
    <input type="speed" name="speed" value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']) ;?>">
    <label>How many hours per day do you plan on driving?</label>
    <input type="hours" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']) ;?>">
    <label>Price of gas</label>
<ul>
<li><input type="radio" name="price" value="3.00" <?php  
if(isset($_POST['price']) && $_POST['price'] == 3.00) 
echo 'checked="checked"' ;?>> $3.00 </li>

<li><input type="radio" name="price" value="3.50" <?php  
if(isset($_POST['price']) && $_POST['price'] == 3.50) 
echo 'checked="checked"' ;?>> $3.50 </li>

<li><input type="radio" name="price" value="4.00" <?php  
if(isset($_POST['price']) && $_POST['price'] == 4.00) 
echo 'checked="checked"' ;?>> $4.00 </li>
</ul>
<label>Fuel efficiency</label>
<select name="efficiency">
<option value="NULL" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == NULL) echo 'selected ="unselected"' ;?>>Select one!</option>
<option value="10 mpg or less" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '10 mpg or less') echo 'selected ="selected"' ;?>>10 mpg or less</option>
<option value="11 - 15 mpg" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '11 - 15 mpg') echo 'selected ="selected"' ;?>>11 - 15 mpg</option>
</select>
<input type="submit" value="Calculate">
<p><a href="">Reset</a></p>
</fieldset>
</form>
<?php
?>
</body>
</html>