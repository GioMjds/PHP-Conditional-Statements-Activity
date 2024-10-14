<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Output sa IT 2102</title>
</head>

<body>

    <h1>Pick - A - Color</h1>
    <div class="form-container">
        <form method="post">
            <input type="text" name="color" id="color" placeholder="Enter a letter (R,O,Y,G,B,I,V)">
            <input type="submit" class="submit" value="Submit">
        </form>
    </div>

    <?php

    $color = '';

    if (isset($_POST['color'])) {
        $color = strtolower($_POST['color']);
    }

    if ($color == 'r' || $color == "red") {
        $color = "Red";
        echo "<h1 style='color: #FF0000;'>Color: $color</h1>";
    } else if ($color == 'o' || $color == 'orange') {
        $color = "Orange";
        echo "<h1 style='color: #FFA500;'>Color: $color</h1>";
    } else if ($color == 'y' || $color == 'yellow') {
        $color = "Yellow";
        echo "<h1 style='color: #FFFF00;'>Color: $color</h1>";
    } else if ($color == 'g' || $color == 'green') {
        $color = "Green";
        echo "<h1 style='color: #008000;'>Color: $color</h1>";
    } else if ($color == 'b' || $color == 'blue') {
        $color = "Blue";
        echo "<h1 style='color: #0000FF;'>Color: $color</h1>";
    } else if ($color == 'i' || $color == 'indigo') {
        $color = "Indigo";
        echo "<h1 style='color: #4B0082;'>Color: $color</h1>";
    } else if ($color == 'v' || $color == 'violet') {
        $color = "Violet";
        echo "<h1 style='color: #800080;'>Color: $color</h1>";
    } else {
        $color = "Please select a color";
        echo "<h1>$color</h1>";
    }

    ?>

</body>

</html>