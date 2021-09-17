<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Madd word game</title>
</head>

<body>
    <form action="site.php" method="get">
        Color: <input type="text" name="color"><br>
        Plural noun: <input type="text" name="pluralNoun"><br>
        Celebrity: <input type="text" name="celebrity"><br>
        <input type="submit">
    </form>
    <br><br>

    <?php
    //del the variable
    $color = $_GET["color"];
    $pluralNoun = $_GET["pluralNoun"];
    $celebrity = $_GET["celebrity"];

    // echo statements
    echo "Rose are $color <br>";
    echo "$pluralNoun is blue <br>";
    echo "$celebrity love you <br>";


    ?>
</body>

</html>