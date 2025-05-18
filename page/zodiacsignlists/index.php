<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zodiac Sign List</title>
    <link rel="stylesheet" href="/page/zodiacsignlists/assets/css/style.css">
</head>
<body>
    <?php
    echo"<header>";
        echo"<div class='navbar'>";
            echo"<h7><a href='/index.php'>Zodiac Sign</a></h7>";
            echo"<a href='/index.php' id='Home'>Home</a>";
            echo"<a href='/page/zodiacsignlists/index.php' id='ZodiacSignList'>Zodiac Signs List</a>";
        echo"</div>";
    echo"</header>";
    ?>

    <?php
    include '/handlers/zodiaclist.php'
    foreach ($ZodiacSigns as $ZodiacSign){
        echo $ZodiacSign;
    }
    ?>
</body>
</html>